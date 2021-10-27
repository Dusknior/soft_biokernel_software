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

    <div class="container" id="container-form">
        <div class="col-md-12 order-md-4 rounded" style="background-color: #B4D2D9;" id="form-sheet">
            <div class="d-flex flex-column">
                <h3 class="mb-4 text-center"><strong>Test de Covid-19</strong></h3>
                <h5 class="mb-3">¿Posee alguno de los siguientes sintomas?</h3>
            </div>
            <form class="form-inline flex-column d-block" name="covid_form">

                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                    <input type="checkbox" class="custom-control-input check" id="cough" name="covid">
                    <label class="custom-control-label d-block mb-3" style="font-size: 18px" for="cough">Tos</label>
                </div>

                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                    <input type="checkbox" class="custom-control-input check" id="breathe" name="covid">
                    <label class="custom-control-label d-block mb-3" style="font-size: 18px" for="breathe">Dificultad
                        para
                        respirar</label>
                </div>

                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                    <input type="checkbox" class="custom-control-input check" id="illness" name="covid">
                    <label class="custom-control-label d-block mb-3" style="font-size: 18px"
                        for="illness">Fiebre</label>
                </div>

                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                    <input type="checkbox" class="custom-control-input check" id="cold" name="covid">
                    <label class="custom-control-label d-block mb-3" style="font-size: 18px"
                        for="cold">Escalofríos</label>
                </div>

                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                    <input type="checkbox" class="custom-control-input check" id="shake" name="covid">
                    <label class="custom-control-label d-block mb-3" style="font-size: 18px" for="shake">Temblores y
                        escalofríos
                        constantes</label>
                </div>

                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                    <input type="checkbox" class="custom-control-input check" id="pain" name="covid">
                    <label class="custom-control-label d-block mb-3" style="font-size: 18px" for="pain">Dolor
                        muscular</label>
                </div>

                <hr class="mb-4" style="background-color: #1E3C40;">
                <button type="button" class="btn btn-secondary btn-lg btn-block mt-3"
                    onclick="checkCovid()">Completar</button>
            </form>

            <div id="msg_covid_1" class="overlay mt-3 mb-3">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h3 class="alert-heading">El paciente tiene Covid o es sospechoso de Covid!</h3>
                    <a href="/paciente" type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
            </div>

            {{-- <div id="msg_covid_2" class="overlay mt-3 mb-3">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h3 class="alert-heading">Es posible que el paciente tenga Covid!</h3>
                    <a href="/paciente" type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
            </div> --}}

        </div>
    </div>


    </main>

    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"
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
