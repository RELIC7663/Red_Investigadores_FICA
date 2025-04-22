# Etapa 1: Construcción
FROM php:8.3-fpm AS builder

# Instalar dependencias del sistema y extensiones de PHP necesarias para Laravel
RUN apt-get update && apt-get install -y --no-install-recommends \
    curl \
    unzip \
    git \
    libpq-dev \
    libonig-dev \
    libssl-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    libicu-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    pdo_pgsql \
    pgsql \
    opcache \
    intl \
    zip \
    bcmath \
    soap \
    gd \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apt-get autoremove -y && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Establecer directorio de trabajo
WORKDIR /var/www

# Copiar archivos de la aplicación
COPY . .

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar dependencias de PHP
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress --prefer-dist

# Generar clave de aplicación
RUN php artisan key:generate

# Cachear configuración y rutas
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Etapa 2: Imagen final
FROM php:8.3-fpm

# Copiar archivos desde la etapa de construcción
COPY --from=builder /var/www /var/www

# Establecer directorio de trabajo
WORKDIR /var/www

# Establecer permisos adecuados
RUN chown -R www-data:www-data /var/www

# Cambiar al usuario no privilegiado
USER www-data

# Exponer el puerto 9000 y ejecutar PHP-FPM
EXPOSE 9000
CMD ["php-fpm"]
