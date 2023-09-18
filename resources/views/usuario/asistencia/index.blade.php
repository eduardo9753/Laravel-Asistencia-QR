@extends('layout.app')


@section('navegador')
    @include('template.nav-usuario')
@endsection


@section('main')
    <section>
        <div class="container">
            <div class="row relleno-arriba">
                <input type="text" name="mes" id="mes" value="{{ date('Y-m-d') }}">
                <input type="text" name="employee_id" id="employee_id" value="{{ $empleyee_id }}">
                <div id='calendar-container'>
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </section>


    @include('usuario.asistencia.modal.modal-registrar-asistencia')

    @include('usuario.asistencia.modal.modal-ver-asistencia')
    

    <script src="{{ asset('js/asistenciaTrabajadorCalendario.js') }}"></script>
@endsection
