@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Nueva Línea de Investigación</h2>
    <form action="{{ route('lineas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Área de Investigación</label>
            <select name="area_investigacion_id" class="form-control" required>
                <option value="">Selecciona un área</option>
                @foreach($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('lineas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
