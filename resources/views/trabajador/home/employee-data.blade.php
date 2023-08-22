<!-- Nombre input -->
<div class="form-group mb-4">
    <label class="form-label" for="nombres">Nombres</label>
    <input type="text" name="nombres" id="nombres" class="form-control" value="{{ $employee->nombres }}" />
    {{-- validacon con validator --}}
    <span class="text-danger error-text nombres_error"></span>
</div>

<!-- Apellido input -->
<div class="form-group mb-4">
    <label class="form-label" for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{ $employee->apellidos }}" />
    {{-- validacon con validator --}}
    <span class="text-danger error-text apellidos_error"></span>
</div>

<div class="row">
    <div class="col-md-6">
        <!-- Dni input -->
        <div class="form-group mb-4">
            <label class="form-label" for="edad">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control" value="{{ $employee->edad }}" />
            {{-- validacon con validator --}}
            <span class="text-danger error-text edad_error"></span>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Documento input -->
        <div class="form-group mb-4">
            <label class="form-label" for="documento"># de Documento</label>
            <input type="number" name="documento" id="documento" class="form-control"
                value="{{ $employee->documento }}" />
            {{-- validacon con validator --}}
            <span class="text-danger error-text documento_error"></span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <!-- Departamento select -->
        <div class="form-group mb-4">
            <label class="form-label" for="departament_id">Departamento</label>
            <input type="text" name="departament_id" id="departament_id" class="form-control"
                value="{{ $employee->nombreDepartamento }}" />
        </div>
    </div>
    <div class="col-md-6">
        <!-- Position select -->
        <div class="form-group mb-4">
            <label class="form-label" for="position_id">Posicion</label>
            <input type="text" name="position_id" id="position_id" class="form-control"
                value="{{ $employee->nombrePosicion }}" />
        </div>
    </div>
</div>
