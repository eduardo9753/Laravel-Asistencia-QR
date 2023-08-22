@extends('layout.app')


@section('navegador')
    @include('template.nav-trabajador')
@endsection


@section('main')
    <section class="home-trabajador">
        <div class="container">
            <div class="row relleno-arriba">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-white bg-success text-center">
                            <h2>Datos Trabajador</h2>
                        </div>
                        <div class="card-body" id="employee">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-white bg-success text-center">
                            <h2>Codigo QR</h2>
                        </div>
                        <div class="card-body">
                            <video id="previsualizacion"></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
