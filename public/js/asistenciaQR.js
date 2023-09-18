$(function () {
    var sonido = new Audio('audio/tono.mp3');
    var scanner = new Instascan.Scanner({
        video: document.getElementById('previsualizacion'),
        scanPeriod: 5,
        mirror: false
    });

    Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[0])
        } else {
            console.log('No se ha encontrado camaras');
            alert('Camaras no encontradas');
        }
    }).catch(function (e) {
        console.log(e);
        alert('error:' + e);
    });

    scanner.addListener('scan', function (respuesta) {
        console.log('Contenido: ' + respuesta);
        //metodo ajax para pintar los datos
        fetchTrabajador();
        function fetchTrabajador() {
            $.get('/trabajador/fetch', { respuesta: respuesta }, function (data) {
                console.log('datos: ' + data.code);
                if (data.code == 0) {
                    alert('Ya esta registrada su Ingreso y Salida');
                    sonido.play();
                    $('#employee').html(data.result);
                } else if (data.code == 1) {
                    alert('Entrada registrada correctamente');
                    sonido.play();
                    $('#employee').html(data.result);
                } else if (data.code == 2) {
                    alert('Salida registrada correctamente');
                    sonido.play();
                    $('#employee').html(data.result);
                }
            }, 'json');
        }
    })
})