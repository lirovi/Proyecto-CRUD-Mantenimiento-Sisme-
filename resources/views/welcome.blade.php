<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sisme</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #3499;
                color: #ffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: 50vh;
                margin: 0;
            }

            .full-height {
                height: 80vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Mantenimiento Equipos 
                </div>

                <div class="links col-b-10 col-md-offset-4 text-center" >
                      <a href="{{ route('cargos.index') }}">Cargos</a>
                      <a href="{{ route('diagnosticos.index') }}">Diagnósticos</a>
                      <a href="{{ route('equipos.index') }}">Equipos</a>
                      <a href="{{ route('funcionarios.index') }}">Funcionarios</a>
                      <a href="{{ route('dptos.index') }}">Deptos</a>
                      <a href="{{ route('unidads.index') }}">Unidades</a>
                      <a href="{{ route('tipoequipos.index') }}">TipoEquipo</a>
                      <a href="{{ route('tipomants.index') }}">TipoMant.</a>
                      <a href="{{ route('solucions.index') }}">Soluciones</a>
                      <a href="{{ route('designacions.index') }}">Designaciones</a>
                      <a href="{{ route('profesions.index') }}">Profesiones</a>
                      <a href="{{ route('mantenimientos.index') }}">Mantenimientos</a>
                </div>
            </div>
        </div>
    </body>
</html>
