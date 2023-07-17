<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Cover Template · Bootstrap v5.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

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
                    <a class="nav-link fw-bold py-1 px-0" href="#">Registro</a>
                    <a class="nav-link fw-bold py-1 px-0" href="#">Terminos y Condiciones</a>
                    <a class="nav-link fw-bold py-1 px-0" href="#">Privacidad</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1>Viaja seguro y fácil...</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore modi corrupti quos maiores
                ex nesciunt! Numquam cum cumque eum</p>
            <p class="lead">
                <button type="button" class="btn btn-lg btn-secondary fw-bold border-white bg-white"
                    data-bs-toggle="modal" data-bs-target="#frmRegistro">Descubre</button>
            </p>
        </main>

        <footer class="mt-auto text-dark">
            <p>Somos <a href="https://vigo.com.py/" class="text-white">Vigo</a>, by <a href="https://vamos.com.py"
                    class="text-white">Vamos</a></p>
        </footer>
    </div>

    <div class="modal fade" tabindex="-1" id="frmRegistro" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-start text-black">
                    <h3 class="text-center">Registro anticipado</h3>
                    <div class="row flex-column">
                        <div class="col my-2">
                            <label for="">Nombre y Apellido</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="col my-2">
                            <label for="">Número de teléfono</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="col my-2">
                            <label for="">Dirección</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div class="col my-2">
                            <label for="">Barrio</label>
                            <input type="text" class="form-control" id="neighborhood">
                        </div>
                        <div class="col my-2">
                            <label for="">Ciudad</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div class="col my-2">
                            <label for="">Nacionalidad</label>
                            <input type="text" class="form-control" id="nationality">
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col col-md-6 mt-2">
                                    <label for="">Tipo documento</label>
                                    <select name="document_type" id="document_type" class="form-select">
                                        <option value="cedula" selected>Cédula</option>
                                        <option value="ruc">RUC</option>
                                        <option value="pasaporte">Pasaporte</option>
                                    </select>
                                </div>
                                <div class="col col-md-6 mt-2">
                                    <label for="">N° documento</label>
                                    <input type="text" class="form-control" id="document_nro">
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-secondary">Registrarme!</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>

</html>
