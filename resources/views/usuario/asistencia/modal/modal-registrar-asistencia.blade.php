<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-registrar-asistencia"
    data-bs-whatever="@mdo">Open modal for @mdo</button>-->

<div class="modal fade" id="modal-registrar-asistencia" tabindex="-1" aria-labelledby="modal-registrar-asistenciaLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-registrar-asistenciaLabel">Nuevo Datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-registrar-asistencia">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fecha_ingreso" class="col-form-label">Ingreso:</label>
                                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fecha_salida" class="col-form-label">Salida:</label>
                                <input type="date" class="form-control" id="fecha_salida">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hora_ingreso" class="col-form-label">Ingreso:</label>
                                <input type="time" class="form-control" id="hora_ingreso">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hora_salida" class="col-form-label">Salida:</label>
                                <input type="time" class="form-control" id="hora_salida">
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
