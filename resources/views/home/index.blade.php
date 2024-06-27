<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/segunda_navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sesion_abierta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>home</title>
</head>

<body>

    @auth
    <nav>
        <div class="navbar">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="bi bi-list"></i>
            </label>
            <a href="home" class="enlace">
                <img class="logo" src="img/LOGO_PUPSY.jpg" alt="Logo">
            </a>

            <div class="barra">
                <button class="butom-busqueda bi bi-search" type="bottom" style="background-color:"></button>
                <!-- Unicode para el carácter de lupa -->
                <input class="buscar" type="text" placeholder="Buscar...">

                <div class="links">
                    <ul class="nav-links">
                        <li><a href="/perros">PERROS</a></li>
                        <li><a href="/gatos">GATOS</a></li>
                        <li><a href="/blogs">BLOG</a></li>
                        <li><a href="/servicios">SERVICIOS</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <i class="bi bi-person-lines-fill"></i>
                    <div class="dropdown-content">
                        <a href="#">{{auth()->user()->name ?? auth()->user()->username}}</a>
                        <a href="perfil">Perfil</a>
                        <a href="/logout">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Nueva barra de navegación debajo de la primera            -->
    <div class="second-navbar">
        <nav>
            <a class="bi bi-cart4"></a>

            <a class="bi-facebook"></a>

            <a class="bi-instagram"></a>
        </nav>
    </div>


    <!-- El resto del contenido de tu página va aquí -->
    <div>
        <div class="slider-container ">
            <div class="container__slider">
                <div class="container">
                    <input type="radio" name="slider" id="item-1" checked>
                    <input type="radio" name="slider" id="item-2">
                    <input type="radio" name="slider" id="item-3">
                    <div class="cards">
                        <label class="card" for="item-1" id="selector-1">
                            <img src="{{ asset('img/captura 1.jpg') }}">
                        </label>
                        <label class="card" for="item-2" id="selector-2">
                            <img src="{{ asset('img/captura 1.jpg') }}">
                        </label>
                        <label class="card" for="item-3" id="selector-3">
                            <img src="{{ asset('img/captura 1.jpg') }}">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="https://chat.whatsapp.com/Fj3TyOxSCZUBkhhrMFqH9f" class="bi bi-whatsapp"></a>

    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/slider_responsive.js') }}"></script>
    <script src="{{ asset('js/menu_desplegable.js') }}"></script>
    <script src="https://kit.fontawesome.com/61a4d52fe3.js" crossorigin="anonymous"></script>

    @endauth


    <!---------------------------------------------------------------------------------------------------------------------------->


    @guest
    <!-- <p>Para ver el contenido inicia Sesion <a href="/login">inicia Sesion</a></p> -->
    <nav>
        <div class="navbar">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="bi bi-list"></i>
            </label>
            <a href="home" class="enlace">
                <img class="logo" src="img/LOGO_PUPSY.jpg" alt="Logo">
            </a>

            <div class="barra">
                <button class="butom-busqueda bi bi-search" type="bottom" style="background-color:"></button>
                <!-- Unicode para el carácter de lupa -->
                <input class="buscar" type="text" placeholder="Buscar...">

                <div class="links">
                    <ul class="nav-links">
                        <li><a href="/perros">PERROS</a></li>
                        <li><a href="/gatos">GATOS</a></li>
                        <li><a href="/blogs">BLOG</a></li>
                        <li><a href="/servicios">SERVICIOS</a></li>
                    </ul>
                </div>
                <div class="botoness">
                    <a href="/register"> <button class="btn_registro">REGISTRATE</button></a>
                    <a href="/login"><button class="btn_inicio">INICIAR SESION</button></a>
                    <button class="bottom-button">MIEMBRO PUPSY</button>
                </div>
            </div>
        </div>
    </nav>





    <!-- Nueva barra de navegación debajo de la primera            -->
    <div class="second-navbar">
        <nav>
            <a class="bi bi-cart4"></a>

            <a class="bi-facebook"></a>

            <a class="bi-instagram"></a>
        </nav>
    </div>


    <!-- El resto del contenido de tu página va aquí -->
    <div class="slider-container ">
        <div class="container__slider">
            <div class="container">
                <input type="radio" name="slider" id="item-1" checked>
                <input type="radio" name="slider" id="item-2">
                <input type="radio" name="slider" id="item-3">
                <div class="cards">
                    <label class="card" for="item-1" id="selector-1">
                        <img src="{{ asset('img/captura 1.jpg') }}">
                    </label>
                    <label class="card" for="item-2" id="selector-2">
                        <img src="{{ asset('img/captura 1.jpg') }}">
                    </label>
                    <label class="card" for="item-3" id="selector-3">
                        <img src="{{ asset('img/captura 1.jpg') }}">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <a href="https://chat.whatsapp.com/Fj3TyOxSCZUBkhhrMFqH9f" class="bi bi-whatsapp"></a>
    @endguest

    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/slider_responsive.js') }}"></script>
    <script src="{{ asset('js/menu_desplegable.js') }}"></script>
    <script src="https://kit.fontawesome.com/61a4d52fe3.js" crossorigin="anonymous"></script>

</body>

</html>