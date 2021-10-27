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
                <h1><strong>Dashboard Hospital</strong></h1>
                <p class="lead text-muted pt-2 pb-2">El presente dashboard despliega las tres
                    secciones más importantes del proyecto, que corresponden a Hospital, Doctor y Usuario. En este
                    dashboard podrá acceder a cada sección
                    para crear, ver, editar y eliminar cada uno de los elementos que manejan para cumplir los
                    requerimientos. </p>
            </div>
        </section>

        <div class="py-5" style="background-color: #1E3C40;" id="overlay">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm ">
                            <a href="#" class="d-flex align-items-center justify-content-center pt-3 pb-3">
                                <img src="{{ asset('img/hospital512.png') }}" class="" width=" 60%" height="60%">
                            </a>

                            <div class=" card-body">
                                <h2 class="card-title d-flex justify-content-center align-items-center">Hospital</h2>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group">
                                        {{-- <a href="/hospital/create" type="button"
                                            class="btn btn-sm btn-secondary">Crear</a> --}}
                                        <a href="/hospital" type="button" class="btn btn-sm btn-secondary">Ir</a>
                                        {{-- <button type="button" class="btn btn-sm btn-secondary"
                                            onclick="displayToggleHospital()">Ver</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="#" class="d-flex align-items-center justify-content-center pt-3 pb-3">
                                <img src="{{ asset('img/doctor512.png') }}" class="" width=" 60%" height="60%">
                            </a>

                            <div class=" card-body">
                                <h2 class="card-title d-flex justify-content-center align-items-center">Doctor</h2>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group">
                                        {{-- <a href="/doctor/create" type="button"
                                            class="btn btn-sm btn-secondary">Crear</a> --}}
                                        <a href="/doctor" type="button" class="btn btn-sm btn-secondary">Ir</a>
                                        {{-- <button type="button" class="btn btn-sm btn-secondary"
                                            onclick="displayToggleDoctor()">Ver</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="#" class="d-flex align-items-center justify-content-center pt-3 pb-3">
                                <img src="{{ asset('img/user512.png') }}" class="" width=" 60%" height="60%">
                            </a>

                            <div class=" card-body">
                                <h2 class="card-title d-flex justify-content-center align-items-center">Usuario</h2>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group">
                                        <a href="/usuario/create" type="button"
                                            class="btn btn-sm btn-secondary">Crear</a>
                                        {{-- <a href="/usuario" type="button" class="btn btn-sm btn-secondary">Ir</a> --}}
                                        <button type="button" class="btn btn-sm btn-secondary"
                                            onclick="displayToggleUser()">Ver</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if (Session::has('mensaje'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">{{ Session::get('mensaje') }}</h4>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="list-group overlay mt-4" id="user-list">
                    <h4 class="mb-3" style="color: #B4D2D9;"><strong>Usuarios</strong></h4>

                    @if (count($usuarios) == 0)
                        <div href="#" class="list-group-item list-group-item-action rounded"
                            style="background-color: #B4D2D9;">
                            <div class="d-flex w-100 justify-content-between">
                                <div class="row mx-0 w-100">
                                    <div class="col">
                                        <br>
                                        <h5 class="mb-1">No hay usuarios creados</h5>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else


                        @foreach ($usuarios as $usuario)
                            <div class="list-group-item list-group-item-action rounded mt-4"
                                style="background-color: #B4D2D9;">
                                <div class="d-flex w-100 justify-content-between">
                                    <div class="row mx-0 w-100">
                                        <div class="col">
                                            <h5 class="mb-1">{{ $usuario->firstname }} {{ $usuario->lastname }}
                                                {{ $usuario->second_lastname }}</h5>
                                            <p class="mb-1">Celular: {{ $usuario->cellphone }}</p>
                                            <p class="mb-1">Dirección: {{ $usuario->address }}</p>
                                            <small>Cto.: {{ $usuario->ct_person_name }}
                                                {{ $usuario->ct_person_lastname }}</small>
                                        </div>
                                        <div class="col-1 d-flex justify-content-end align-items-center">
                                            <a href="{{ url('usuario/' . $usuario->id) . '/edit' }}" type="button">
                                                <span style="font-size: 1.5em;  color: #1E3C40;">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                            </a>
                                            <form action="{{ url('usuario/' . $usuario->id) }}" method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-link" type="submit"
                                                    onclick="return confirm('¿Desea eliminar el usuario?')"><span
                                                        style="font-size: 1.5em;  color: #1E3C40;"><i
                                                            class="fas fa-trash"></i></span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @endif
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
