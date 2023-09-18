<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#"modal-ver-asistencia"
    data-bs-whatever="@mdo">Open modal for @mdo</button>-->

<div class="modal fade" id="modal-ver-asistencia" tabindex="-1" aria-labelledby="modal-ver-asistenciaLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-ver-asistenciaLabel">Nuevo Datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-ver-asistencia">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Nombre input -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="nombres">Nombres</label>
                                <input type="text" name="nombres" id="nombres" class="form-control" />
                            </div>

                        </div>
                        <div class="col-md-6">
                            <!-- Apellido input -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" />
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <!-- Dni input -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="edad">Edad</label>
                                <input type="number" name="edad" id="edad" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Documento input -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="documento"># de Documento</label>
                                <input type="number" name="documento" id="documento" class="form-control" />
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <!-- Departamento select -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="departament_id">Departamento</label>
                                <input type="text" name="departament_id" id="departament_id" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Position select -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="position_id">Posicion</label>
                                <input type="text" name="position_id" id="position_id" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Departamento select -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="fecha_ingreso">Fecha de Ingreso</label>
                                <input type="datetime-local" name="fecha_ingreso" id="fecha_ingreso" class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Position select -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="fecha_salida">Fecha de Salida</label>
                                <input type="text" name="fecha_salida" id="fecha_salida" class="form-control" />
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
