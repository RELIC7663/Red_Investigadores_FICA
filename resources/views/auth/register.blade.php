<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('https://www.utn.edu.ec/wp-content/uploads/2021/06/planta-central-utn.png') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .register-container {
      background: rgba(255, 255, 255, 0.9);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }
    .btn-register {
      background-color: #007bff;
      color: white;
      font-weight: bold;
      width: 100%;
      padding: 12px;
      border-radius: 6px;
      transition: background 0.3s ease;
    }
    .btn-register:hover {
      background-color: #0056b3;
    }
    .form-control {
      border-radius: 6px;
    }
    .form-label {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h3 class="mb-4">Registrarse</h3>
    <form action="{{ route('register.store') }}" method="POST">
      @csrf
      <div class="mb-3 text-start">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" required>
      </div>
      <div class="mb-3 text-start">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo" required>
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
      </div>
      <div class="mb-3 text-start">
        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirma tu contraseña" required>
      </div>
      <button type="submit" class="btn btn-register">Registrarse</button>
    </form>
    <p class="mt-3">¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
