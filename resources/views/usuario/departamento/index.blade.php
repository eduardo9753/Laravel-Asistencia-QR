@extends('layout.app')


@section('navegador')
    @include('template.nav-usuario')
@endsection


@section('main')
    <div class="container">
        <div class="row relleno-arriba">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-white bg-success text-center">
                        <h2>Registrar Departamento</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('usuario.departamento.store') }}" method="POST" novalidate>

                            {{-- token de seguridad --}}
                            @csrf

                            <!-- Email input -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="nombre">Nombre del Departamento</label>
                                <input type="text" name="nombre" id="nombre" class="form-control"
                                    placeholder="Sistemas | Paus | etc" />
                                {{-- validacon con validator --}}
                                <span class="text-danger error-text nombre_error"></span>
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
                        <h2>Lista de Departamentos</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Sistema</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
