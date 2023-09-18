document.addEventListener('DOMContentLoaded', function () {

    let mes = document.getElementById('mes').value;
    let employee_id = document.getElementById('employee_id').value;

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'dayGridMonth',
        locale: 'es',
        initialDate: mes,  //PARA ESTABLECER UN MES POR DEFECTO

        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
        },

        eventTimeFormat: { // like '14:30:00'
            hour: 'numeric', //2-digit
            minute: '2-digit',
            second: '2-digit',
            meridiem: false
        },

        editable: true,    //para mover el horario o sintillo
        selectable: true,

        //MOSTRANDO EL MODAL PARA REGISTRAR UN EVENTO(asistencia)
        dateClick: function (info, jsEvent, view) {
            console.log('Fecha'+moment(info.date).format('YYYY-MM-DD'));
            var modal_registrar_asistencia  = $('#modal-registrar-asistencia');
            $(modal_registrar_asistencia).find('#form-registrar-asistencia').find('#fecha_ingreso').val(moment(info.date).format('YYYY-MM-DD'));
            $(modal_registrar_asistencia).find('#form-registrar-asistencia').find('#fecha_salida').val(moment(info.date).format('YYYY-MM-DD'));
            $(modal_registrar_asistencia).modal('show');
        },


        //URL DE HORARIOS REGISTRADOS POR LOS MEDICOS Y SE ENLAZA CON LA PLANTILLA "view/administrador/calendario/calendario.php"
        events: "/menu/usuario/trabajador/asistencia/show/" + employee_id + "",


        //click al evento y ver los datos
        eventClick: function (info) {
            console.log(moment('entrada'+info.event.start).format('YYYY-MM-DD') + 'T' + info.event.extendedProps.hora_ingreso); //campos en ingles
            console.log(moment('salida'+info.event.end).format('YYYY-MM-DD') + 'T' + info.event.extendedProps.hora_salida);
            var fecha_ingreso = moment(info.event.start).format('YYYY-MM-DD') + 'T' + info.event.extendedProps.hora_ingreso;
            var fecha_salida = moment(info.event.end).format('YYYY-MM-DD') + 'T' + info.event.extendedProps.hora_salida;
            //console.log(info.event.end); //campos en ingles
            //console.log(info.event.extendedProps); //campos español

            var modal_ver_asistencia = $('#modal-ver-asistencia');
            $(modal_ver_asistencia).find('#form-ver-asistencia').find('#nombres').val(info.event.extendedProps.apellidos);
            $(modal_ver_asistencia).find('#form-ver-asistencia').find('#apellidos').val(info.event.extendedProps.apellidos);
            $(modal_ver_asistencia).find('#form-ver-asistencia').find('#edad').val(info.event.extendedProps.edad);
            $(modal_ver_asistencia).find('#form-ver-asistencia').find('#documento').val(info.event.extendedProps.documento);
            $(modal_ver_asistencia).find('#form-ver-asistencia').find('#departament_id').val(info.event.extendedProps.nombreDepartamento);
            $(modal_ver_asistencia).find('#form-ver-asistencia').find('#position_id').val(info.event.extendedProps.nombrePosicion);
            $(modal_ver_asistencia).find('#form-ver-asistencia').find('#fecha_ingreso').val(fecha_ingreso);
            $(modal_ver_asistencia).find('#form-ver-asistencia').find('#fecha_salida').val(fecha_salida);
            $(modal_ver_asistencia).modal('show');
        }



    });

    calendar.render();

});