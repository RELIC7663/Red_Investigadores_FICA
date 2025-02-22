@extends('layouts.app')

@section('content')
<div class="container m-5 bg-white p-4 rounded shadow-sm">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="fw-bold mt-4">Líneas de Investigación</h2>
        @hasanyrole(['administrador', 'investigador'])
        <a href="{{ route('lineas.create') }}" class="btn btn-success mt-4">
            <i class="fas fa-plus fa-fw me-1"></i> Nueva Entrada
        </a>
        @endhasanyrole
    </div>

    <div class="table-responsive mt-4">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Área de Investigación</th>
                    @hasanyrole(['administrador', 'investigador'])
                    <th class="text-end">Acciones</th>
                    @endhasanyrole
                </tr>
            </thead>
            <tbody>
                @foreach($lineas as $linea)
                <tr>
                    <td>{{ $linea->nombre }}</td>
                    <td>{{ $linea->descripcion }}</td>
                    <td>{{ $linea->areaInvestigacion->nombre }}</td>
                    @hasanyrole(['administrador', 'investigador'])
                    <td class="text-end">
                        <div class="d-flex gap-2 justify-content-end">
                            @role(['administrador', 'investigador'])
                            <a href="{{ route('lineas.edit', $linea->id) }}"
                                class="btn btn-sm btn-warning d-flex align-items-center"
                                style="min-width: 100px;"
                                title="Editar">
                                <i class="fas fa-edit fa-fw me-1"></i> Editar
                            </a>
                            @endrole
                            @role('administrador')
                            <form action="{{ route('lineas.destroy', $linea->id) }}"
                                method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-sm btn-danger d-flex align-items-center"
                                    style="min-width: 100px;"
                                    onclick="return confirm('¿Eliminar este registro permanentemente?')"
                                    title="Eliminar">
                                    <i class="fas fa-trash fa-fw me-1"></i> Eliminar
                                </button>
                            </form>
                            @endrole
                        </div>
                    </td>
                    @endhasanyrole
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>
