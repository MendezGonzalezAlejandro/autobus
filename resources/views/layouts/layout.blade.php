<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istmeños - @yield('post')</title>

    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body id="body">



    <header>

        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
        <div class="prueba">
        <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                               
                                <a id="navbarDropdown" class=""  aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{'Bienvenido '}}
                                    {{ Auth::user()->name }}
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
    </header>

    <div class="menu__side" id="menu_side">

        <!-- Nombre del usuario que ingreso-->
        <div class="name__page">
        <i class="fas fa-bus-alt"></i>
            <h4>Istmeños</h4>
        </div>

        

        <div class="options__menu">	

            <a href="/home" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="/Mostrar">
                <div class="option">
                    <i class="fas fa-bus" title="Autobuses"></i>
                    <h4>Autobuses</h4>
                </div>
            </a>
            
            <a href="/mostrarChofer">
                <div class="option">
                    <i class="fas fa-user-plus" title="Choferes"></i>
                    <h4>Choferes</h4>
                </div>
            </a>

            <a href="/mostrarCorrida">
                <div class="option">
                    <i class="fas fa-route" title="Corridas"></i>
                    <h4>Corridas</h4>
                </div>
            </a>

            <a href="/">
                <div class="option">
                    <i class="fas fa-shopping-cart" title="Comprar"></i>
                    <h4>Comprar</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-address-card" title="Información"></i>
                    <h4>¿Quiénes somos?</h4>
                </div>
            </a>

            <div class="option">
                <a  href="{{ route('logout') }}"
                
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <i class="fas fa-sign-out-alt" title="Cerrar sesión"></i>                                                                      
                </a>
            </div> 

        </div>

    </div>
   


     

   

    <!-- Contenido -->
    <br>
    @yield('content')


    <!-- Footer -->
        <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">

            <a href="https://goo.gl/maps/THAVbhtc9Hb6UR6w7">
                    <img src="{{asset('imagen/map.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
            </a>
                
            </div>
            <div id="col-md-10">
                <p class="mt-3">Copyright © 2022 Los Istmeños S.A. de C.V.<br> Todos los derechos reservados.</p>
            </div>
            </div>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




            <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="js/script.js"></script>
    </body>
</html>