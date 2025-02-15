@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Nueva Línea de Investigación</h2>

    <form action="{{ route('lineas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Autor</label>
            <input type="text" name="autor" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Proyecto</label>
            <input type="text" name="proyecto" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Año</label>
            <input type="number" name="anio" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">URL del Video (opcional)</label>
            <input type="url" name="video_url" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('lineas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
