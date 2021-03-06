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
                    <li class="header"><h6>MENU</h6></li>
                    <li>
                    <a href="{{route('home')}}">
                        Inicio 
                    </a>
                    </li>
                    <li>
                    <a href="{{route('cadastra_veiculo')}}">
                        Cadastrar veículo
                    </a>
                    </li>
                    <li>
                    <a href="{{route('lista_veiculo')}}">
                        Lista de veículos
                    </a>
                    </li>
                    <li>
                    <a href="{{route('km_saida')}}">
                       Registrar KM Saída
                    </a>
                    </li>
                    <li>
                    <a href="{{route('abastece')}}">
                        Abastecimento
                    </a>
                    </li>  
                    
                    <li>
                    <a href="{{route('abasteceExt')}}">
                        Abastecimento Ext</i> 
                    </a>
                    </li>  

                    <li class="deslogar">
                        <a class="log-out-btn" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> 
                            <i class="fa fa-cog" aria-hidden="true">Sair</i> 
                        </a>

                    </li>   
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                    </form>               
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

