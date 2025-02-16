@extends('layouts.app')

@section('content')

<div class="container m-5 bg-white m-5 p-4 rounded shadow-sm">

    <div class="">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fw-bold mt-4 ">Líneas de Investigación</h2> <!-- Texto en blanco añadido -->

            @hasanyrole(['administrador', 'investigador'])
            <a href="{{ route('lineas.create') }}" class="btn btn-success mt-4">
                <i class="fas fa-plus fa-fw me-1"></i> Nueva Entrada
            </a>
            @endhasanyrole
        </div>

        <ul class="nav nav-tabs" id="yearTabs">
            @php
            $years = $lineas->unique('anio')->pluck('anio')->sort();
            @endphp

            @foreach($years as $index => $year)
            <li class="nav-item">
                <a class="nav-link {{ $index === 0 ? 'active' : '' }}"
                    id="tab{{ $year }}"
                    data-bs-toggle="tab"
                    href="#content{{ $year }}">
                    {{ $year }}
                </a>
            </li>
            @endforeach
        </ul>

        <div class="tab-content mt-4">
            @foreach($years as $index => $year)
            <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="content{{ $year }}">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Fecha</th>
                                <th>Autor</th>
                                <th>Proyecto</th>
                                <th>Entrevista</th>
                                @hasanyrole(['administrador', 'investigador'])
                                <th class="text-end">Acciones</th>
                                @endhasanyrole
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lineas->where('anio', $year) as $linea)
                            <tr>
                                <td>{{ $linea->fecha->format('d/m/Y') }}</td>
                                <td>{{ $linea->autor }}</td>
                                <td>{{ $linea->proyecto }}</td>
                                <td>
                                    @if($linea->video_url)
                                    <div class="ratio ratio-16x9">
                                        <iframe src="{{ $linea->video_url }}"
                                            class="rounded"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    @else
                                    <span class="text-muted">Sin video</span>
                                    @endif
                                </td>
                                @hasanyrole(['administrador', 'investigador'])
                                <td class="text-end">
                                    <div class="d-flex gap-2 justify-content-end flex-nowrap">
                                        @role(['administrador', 'investigador'])
                                        <a href="{{ route('lineas.edit', $linea->id) }}"
                                            class="btn btn-sm btn-warning d-flex align-items-center"
                                            style="min-width: 100px; padding: 0.25rem 0.5rem;"
                                            title="Editar">
                                            <i class="fas fa-edit fa-fw me-1"></i> Editar
                                        </a>
                                        @endrole

                                        @role('administrador')
                                        <form action="{{ route('lineas.destroy', $linea->id) }}"
                                            method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-sm btn-danger d-flex align-items-center"
                                                style="min-width: 100px; padding: 0.25rem 0.5rem;"
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
            @endforeach
        </div>
    </div>

</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script> <!-- Reemplaza con tu kit real -->