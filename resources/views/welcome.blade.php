<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vigo App">
    <meta name="author" content="VAMOS EAS">
    <title>VIGO APP</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url({{ asset('images/fondo.png') }});
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        .accordion-item{
            border: none !important;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/cover.css') }}">
</head>

<body class="d-flex h-100 text-center text-bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-4 mx-auto flex-column">
        <header class="mb-auto">
            <div class="w-100">
                <img src="{{ asset('images/logo.png') }}" alt="Vigo" height="50px" width="auto">
                <nav class="nav nav-masthead justify-content-center float-md-end mt-2">
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Inicio</a>
                    <a class="nav-link fw-bold py-1 px-0" href="#" onclick="openTerminos()">Terminos y
                        Condiciones</a>
                    <a class="nav-link fw-bold py-1 px-0" href="#" onclick="openPrivacidad()">Privacidad</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1>Viaja seguro e inteligente...</h1>
            <p class="lead">¡ViGO App, la aplicación segura e inteligente que revolucionará tu vida!</p>
            <p>Bajá la aplicación y registrate:</p>
            <div class="d-flex flex-row">
                <div class="col-6 col-md-6 text-center">
                    <h3>Conductor</h3>
                    <a href="https://play.google.com/store/apps/details?id=vigo.paraguay.taxi.conductor">
                     <img src="{{ asset('images/logo_google_play.webp') }}" alt="Google Play" style="max-width: 120px" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-6 col-md-6 text-center">
                    <h3>Usuario</h3>
                    <a href="https://play.google.com/store/apps/details?id=vigo.paraguay.taxi.pasajero">
                     <img src="{{ asset('images/logo_google_play.webp') }}" alt="Google Play" style="max-width: 120px" class="img-thumbnail">
                    </a>
                </div>
            </div>
        </main>

        <footer class="mt-auto text-dark">
            <p>Somos <a href="https://vigo-app.com" class="text-white">Vigo</a>, by <a href="#"
                    class="text-white">Fusion Bussines</a></p>
        </footer>
    </div>

    <div class="modal fade" tabindex="-1" id="frmRegistro" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-start text-black">
                    <h3 class="text-center">Registro anticipado</h3>
                    <div id="formulario">
                        @include('formulario')
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="modal fade text-black" tabindex="-1" id="terminos">
        <div class="modal-dialog  modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terminos y condiciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="contenido" id="contenido1"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-black" tabindex="-1" id="privacidad">
        <div class="modal-dialog  modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Privacidad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="contenido" id="contenido2"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#frmDrivers').on('submit', function(e) {
                e.preventDefault();
                var datos = $("#frmDrivers").serialize();
                $.ajax({
                        type: "POST",
                        url: "{{ url('api/drivers') }}",
                        data: datos
                    })
                    .done(function(data) {
                        if (data.msg == "ok") {
                            $("#driver_id").val(data.driver_id)
                            $(".nav-link#vehicle-tab").removeClass('disabled');
                            $(".nav-link#vehicle-tab").click();
                            $("#frmDrivers :input").prop('disabled', true);
                        }
                    })
                    .fail(function(data) {
                        alert("Los datos estan errados")
                    });
            });

            $("#frmVehiculo").on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ url('api/driver-vehicle') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.msg == "ok") {
                            $("#driver_id2").val(data.driver_id)
                            $(".nav-link#images-tab").removeClass('disabled');
                            $(".nav-link#images-tab").click();
                            $("#frmVehiculo :input").prop('disabled', true);
                        }
                    }
                })
            });

            $("#frmFotosDriver").on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ url('api/upload-foto') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.msg == "ok") {
                            $('#frmFoto').modal('hide');
                            $("#btnDescubre").addClass('d-none');
                            alert(
                                "Gracias por registrarte, te avisaremos cuando estemos listos para comenzar a trabajar juntos.");
                            $("#frmRegistro").modal('hide');
                        }
                    }
                })
            });
        });

        function openTerminos() {
            $("#contenido1").load("{{ url('terminos.php') }}")
            $("#terminos").modal('show');
        }

        function openPrivacidad() {
            $("#contenido2").load("{{ url('politica.php') }}")
            $("#privacidad").modal('show');
        }

        function previewImage($campo,$imagen){
            var file = document.getElementById($campo).files[0];
            // get file extension
            var extension = file.name.split('.').pop().toLowerCase();
            if(extension!="pdf"){
                var reader = new FileReader();
                reader.onload = (e) => {
                    $("#"+$imagen).attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        }

        $("#documento_nro").on('change', function() {
            control("#documento_nro");
        })
    </script>
</body>

</html>
