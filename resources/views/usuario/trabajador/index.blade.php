@extends('layout.app')


@section('navegador')
    @include('template.nav-usuario')
@endsection


@section('main')
    <section>
        <div class="container">
            <div class="row relleno-arriba">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-white bg-success text-center">
                            <h2>Registrar Trabajador</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('usuario.trabajdor.store') }}" method="POST" novalidate>

                                {{-- token de seguridad --}}
                                @csrf

                                <!-- Nombre input -->
                                <div class="form-group mb-4">
                                    <label class="form-label" for="nombres">Nombres</label>
                                    <input type="text" name="nombres" id="nombres" class="form-control"
                                        placeholder="Cristiano Ronaldo" />
                                    {{-- validacon con validator --}}
                                    <span class="text-danger error-text nombres_error"></span>
                                </div>

                                <!-- Apellido input -->
                                <div class="form-group mb-4">
                                    <label class="form-label" for="apellidos">Apellidos</label>
                                    <input type="text" name="apellidos" id="apellidos" class="form-control"
                                        placeholder="dos Santos Aveiro" />
                                    {{-- validacon con validator --}}
                                    <span class="text-danger error-text apellidos_error"></span>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Dni input -->
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="edad">Edad</label>
                                            <input type="number" name="edad" id="edad" class="form-control"
                                                placeholder="38" />
                                            {{-- validacon con validator --}}
                                            <span class="text-danger error-text edad_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Documento input -->
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="documento"># de Documento</label>
                                            <input type="number" name="documento" id="documento" class="form-control"
                                                placeholder="77665544" />
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
                                            <select name="departament_id" id="departament_id" class="form-select">
                                                @foreach ($departaments as $departament)
                                                    <option value="{{ $departament->id }}">{{ $departament->nombre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Position select -->
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="position_id">Posicion</label>
                                            <select name="position_id" id="position_id" class="form-select">
                                                @foreach ($positions as $position)
                                                    <option value="{{ $position->id }}">{{ $position->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <input type="submit" class="btn btn-success btn-block mb-4" value="Registrar">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-white bg-success text-center">
                            <h2>Lista de Trabajadores</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Departamento</th>
                                        <th scope="col">Posicion</th>
                                        <th scope="col">Asistencia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $employee->apellidos }}</td>
                                            <td>{{ $employee->nombreDepartamento }}</td>
                                            <td>{{ $employee->nombrePosicion }}</td>
                                            <td>
                                                <a href="{{ route('usuario.asistencia.index', ['id'=>$employee->id]) }}">Ver</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
