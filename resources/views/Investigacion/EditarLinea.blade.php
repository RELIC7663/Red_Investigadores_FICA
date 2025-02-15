@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Editar Línea de Investigación</h2>

    <form action="{{ route('lineas.update', $linea->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Autor</label>
            <input type="text" name="autor" class="form-control" value="{{ $linea->autor }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Proyecto</label>
            <input type="text" name="proyecto" class="form-control" value="{{ $linea->proyecto }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $linea->fecha->format('Y-m-d') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Año</label>
            <input type="number" name="anio" class="form-control" value="{{ $linea->anio }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">URL del Video (opcional)</label>
            <input type="url" name="video_url" class="form-control" value="{{ $linea->video_url }}">
        </div>

        <button type="submit" class="btn btn-warning">Actualizar</button>
        <a href="{{ route('lineas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
