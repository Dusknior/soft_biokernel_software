<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b5521978e2.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>SoftBiokernel Software</title>
    <link rel="shortcut icon" type="image/ico" href="{{ asset('img/h.ico') }}" />
</head>

<body>

    <header>
        <div class="collapse" style="background-color: #1E3C40;" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Acerca de</h4>
                        <p class="text-justify" style="color: #B4D2D9;">La empresa SoftBiokernel tiene la
                            necesidad de construir para
                            sus
                            clientes del
                            sector salud una aplicación web que permite controlar los pacientes que llegan al Triaje por
                            emergencia donde se le permita al doctor de turno registrar la información del paciente como
                            datos principales, causa de la consulta, diagnóstico del doctor, se le revisara conforme a
                            un
                            formulario con preguntas básicas para identificar si tiene COVID-19 o no.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Creado Por</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none" style="color: #B4D2D9;">Daniel Bernal</a></li>
                            <li><a href="#" class=" text-decoration-none" style="color: #B4D2D9;">David Cermeño</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark shadow-sm" style="background-color: #102426;">
            <div class="container d-flex justify-content-between">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <i class="fas fa-home mr-2"></i>
                    <strong>Inicio</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <h1><strong>SoftBiokernel Dashboard</strong></h1>
                <p class="lead text-muted pt-2 pb-2">El presente dashboard despliega las dos
                    secciones
                    principales
                    del proyecto, que corresponden a Hospital y Doctor. En este dashboard podrá acceder a cada sección
                    para crear, ver, editar y eliminar cada uno de los elementos que manejan para cumplir los
                    requerimientos. </p>
                <button type="button" class="btn btn-lg btn-secondary" onclick=" displayToggle()">Empezar</button>
            </div>
        </section>

        <div class="py-5 overlay" style="background-color: #1E3C40;" id="overlay">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 shadow-sm">
                            <a href="/hospital" class="d-flex align-items-center justify-content-center pt-3 pb-3">
                                <img src="{{ asset('img/hospital512.png') }}" width=" 50%" height="50%">
                            </a>

                            <div class=" card-body d-flex justify-content-center  align-items-center">
                                <h2 class="card-title">Hospital</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 shadow-sm">
                            <a href="/paciente" class="d-flex align-items-center justify-content-center pt-3 pb-3">
                                <img src="{{ asset('img/doctor512.png') }}" width=" 50%" height="50%">
                            </a>

                            <div class="card-body d-flex justify-content-center  align-items-center">
                                <h2 class="card-title">Doctor</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}">
    </script>
</body>

</html>
