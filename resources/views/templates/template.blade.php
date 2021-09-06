<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJETO FRIX</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/estilo.css')}}">
    <header>
    <div class="sidebar-container">
        <div class="sidebar-logo">
            PROJETO FRIX
            </div>
                <ul class="sidebar-navigation">
                    <li class="header">MENU</li>
                    <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home" aria-hidden="true"></i> Inicio
                    </a>
                    </li>
                    <li>
                    <a href="{{route('cadastra_caminhao')}}">
                        <i class="fa fa-tachometer" aria-hidden="true"></i> Cadastrar veículo
                    </a>
                    </li>
                    <li>
                    <a href="{{route('lista_caminhao')}}">
                        <i class="fa fa-users" aria-hidden="true"></i> Lista de veículos
                    </a>
                    </li>
                    <li>
                    <a href="{{route('abastece')}}">
                        <i class="fa fa-cog" aria-hidden="true"></i> Abastecimento
                    </a>
                    </li>
                    <li>                   
                </ul>
            </div>
        </div>
    </header>
</head>
<body>
    @yield('content')
    <script src="{{url('assets/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>

