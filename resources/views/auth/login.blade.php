<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-blue: #005A8B;
      --accent-yellow: #FFC107;
      --dark-gray: #2D2D2D;
      --hover-blue: #004A73;
    }

    body {
      background: linear-gradient(135deg, var(--primary-blue), var(--hover-blue));
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.9);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    .btn-login {
      background-color: var(--primary-blue);
      color: white;
      font-weight: bold;
      width: 100%;
      padding: 12px;
      border-radius: 6px;
      transition: background 0.3s ease;
    }

    .btn-login:hover {
      background-color: var(--hover-blue);
    }

    .form-control {
      border-radius: 6px;
    }

    .form-label {
      font-weight: bold;
    }

    .forgot-password {
      font-size: 14px;
      text-decoration: none;
      color: var(--primary-blue);
      transition: color 0.3s ease;
    }

    .forgot-password:hover {
      color: var(--hover-blue);
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h3 class="mb-4">Iniciar Sesión</h3>
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="mb-3 text-start">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo" required>
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
      </div>
      <button type="submit" class="btn btn-login">Acceder</button>
    </form>
    <p class="mt-3">¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
