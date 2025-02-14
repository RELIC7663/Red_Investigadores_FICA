<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Perfil de Usuario</h2>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ auth()->user()->name }}</h4>
                <p class="card-text"><strong>Email:</strong> {{ auth()->user()->email }}</p>
                <p class="card-text"><strong>Registrado el:</strong> {{ auth()->user()->created_at->format('d/m/Y') }}</p>

                <a href="{{ route('settings') }}" class="btn btn-primary">Editar Perfil</a>
            </div>
        </div>
    </div>
    @endsection




</body>

</html>