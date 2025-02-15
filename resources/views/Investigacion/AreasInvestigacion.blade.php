@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Áreas de Investigación</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Mostrar botones de agregar, editar y eliminar solo si el usuario tiene rol de administrador o investigador --}}
    @role(['administrador', 'investigador'])
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addAreaModal">
        Agregar Área
    </button>
    @endrole

    <div class="row">
        @foreach($areas as $area)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $area->titulo }}</h5>
                        <p class="card-text">{{ $area->descripcion }}</p>
                        @role(['administrador', 'investigador'])
                        <button class="btn btn-warning btn-sm" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editAreaModal"
                                data-id="{{ $area->id }}"
                                data-titulo="{{ $area->titulo }}"
                                data-descripcion="{{ $area->descripcion }}">
                            Editar
                        </button>
                        @endrole
                        @role('administrador')
                        <button class="btn btn-danger btn-sm" 
                                data-bs-toggle="modal" 
                                data-bs-target="#deleteAreaModal"
                                data-id="{{ $area->id }}">
                            Eliminar
                        </button>
                        @endrole
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- Los modales se incluirán dentro de un bloque @role para que sólo se muestren a usuarios con permisos --}}
@role(['administrador', 'investigador'])
<!-- Modal Agregar Área -->
<div class="modal fade" id="addAreaModal" tabindex="-1" aria-labelledby="addAreaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('areas.store') }}" method="POST">
         @csrf
         <div class="modal-header">
           <h5 class="modal-title" id="addAreaModalLabel">Agregar Área</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
         </div>
         <div class="modal-body">
           <div class="mb-3">
             <label for="titulo" class="form-label">Título</label>
             <input type="text" class="form-control" name="titulo" required>
           </div>
           <div class="mb-3">
             <label for="descripcion" class="form-label">Descripción</label>
             <textarea class="form-control" name="descripcion" required></textarea>
           </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
           <button type="submit" class="btn btn-primary">Guardar</button>
         </div>
      </form>
    </div>
  </div>
</div>
@endrole

@role(['administrador', 'investigador'])
<!-- Modal Editar Área -->
<div class="modal fade" id="editAreaModal" tabindex="-1" aria-labelledby="editAreaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editAreaForm" method="POST">
         @csrf
         @method('PUT')
         <div class="modal-header">
           <h5 class="modal-title" id="editAreaModalLabel">Editar Área</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
         </div>
         <div class="modal-body">
           <div class="mb-3">
             <label for="editTitulo" class="form-label">Título</label>
             <input type="text" class="form-control" name="titulo" id="editTitulo" required>
           </div>
           <div class="mb-3">
             <label for="editDescripcion" class="form-label">Descripción</label>
             <textarea class="form-control" name="descripcion" id="editDescripcion" required></textarea>
           </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
           <button type="submit" class="btn btn-success">Actualizar</button>
         </div>
      </form>
    </div>
  </div>
</div>
@endrole

@role('administrador')
<!-- Modal Eliminar Área -->
<div class="modal fade" id="deleteAreaModal" tabindex="-1" aria-labelledby="deleteAreaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="deleteAreaForm" method="POST">
         @csrf
         @method('DELETE')
         <div class="modal-header">
           <h5 class="modal-title" id="deleteAreaModalLabel">Eliminar Área</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
         </div>
         <div class="modal-body">
           <p>¿Estás seguro de que deseas eliminar esta área?</p>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
           <button type="submit" class="btn btn-danger">Eliminar</button>
         </div>
      </form>
    </div>
  </div>
</div>
@endrole

<script>
  // Configurar modal de edición: cargar datos del área seleccionada
  var editAreaModal = document.getElementById('editAreaModal');
  editAreaModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    var titulo = button.getAttribute('data-titulo');
    var descripcion = button.getAttribute('data-descripcion');

    editAreaModal.querySelector('#editTitulo').value = titulo;
    editAreaModal.querySelector('#editDescripcion').value = descripcion;

    document.getElementById('editAreaForm').action = '/areas/' + id;
  });

  // Configurar modal de eliminación: asignar acción al formulario
  var deleteAreaModal = document.getElementById('deleteAreaModal');
  deleteAreaModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');

    document.getElementById('deleteAreaForm').action = '/areas/' + id;
  });
</script>
@endsection
