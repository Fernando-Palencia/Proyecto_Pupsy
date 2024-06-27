<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/segunda_navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sesion_abierta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/resposivoPortatil.css') }}"> -->
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
                        <a href="#">{{ auth()->user()->name ?? auth()->user()->username }}</a>
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

        <div class="perros">BLOGS</div>

    </div>
    <a href="https://chat.whatsapp.com/Fj3TyOxSCZUBkhhrMFqH9f" class="bi bi-whatsapp"></a>

    <p class="title">Cosas de Perros y Gatos</p>

    <div class="card-container">
        <div class="card">
            <img src="img/anuncio.jpeg" alt="Dog and Owner">
            <div class="content">
                <h2>CONSEJOS</h2>
                <h1>Diarrea en perros y gatos: ¿debo preocuparme por mi mascota?</h1>
                <p>Todos los perros y gatos pueden sufrir diarrea alguna vez en su vida. Las causas más
                    habituales son infecciones bacterianas o víricas, así como causas alimentarias, como la ingesta
                    de...
                </p>
            </div>
        </div>
        <!-- Agrega más tarjetas según lo necesites -->
        <div class="card">
            <img src="img/anuncio.jpeg" alt="Dog and Owner">
            <div class="content">
                <h2>CONSEJOS</h2>
                <h1>Diarrea en perros y gatos: ¿debo preocuparme por mi mascota?</h1>
                <p>Todos los perros y gatos pueden sufrir diarrea alguna vez en su vida. Las causas más
                    habituales son infecciones bacterianas o víricas, así como causas alimentarias, como la ingesta
                    de...
                </p>
            </div>
        </div>
        <!-- Agrega más tarjetas según lo necesites -->
        <div class="card">
            <img src="img/anuncio.jpeg" alt="Dog and Owner">
            <div class="content">
                <h2>CONSEJOS</h2>
                <h1>Diarrea en perros y gatos: ¿debo preocuparme por mi mascota?</h1>
                <p>Todos los perros y gatos pueden sufrir diarrea alguna vez en su vida. Las causas más
                    habituales son infecciones bacterianas o víricas, así como causas alimentarias, como la ingesta
                    de...
                </p>
            </div>
        </div>
        <!-- Agrega más tarjetas según lo necesites -->
        <div class="card">
            <img src="img/anuncio.jpeg" alt="Dog and Owner">
            <div class="content">
                <h2>CONSEJOS</h2>
                <h1>Diarrea en perros y gatos: ¿debo preocuparme por mi mascota?</h1>
                <p>Todos los perros y gatos pueden sufrir diarrea alguna vez en su vida. Las causas más
                    habituales son infecciones bacterianas o víricas, así como causas alimentarias, como la ingesta
                    de...
                </p>
            </div>
        </div>
        <!-- Agrega más tarjetas según lo necesites -->
    </div>

    <script src="{{ asset('js/slider_responsive.js') }}"></script>
    <script src="{{ asset('js/menu_desplegable.js') }}"></script>

    @endauth


    <!-------------------------------------------------------Sesion No Iniciada(↓)--------------------------------------------------------------------->


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
        <div class="perros">BLOGS</div>
    </div>
    <a href="https://chat.whatsapp.com/Fj3TyOxSCZUBkhhrMFqH9f" class="bi bi-whatsapp"></a>

    <p class="title">Cosas de Perros y Gatos</p>

    <div class="card-container">
        <div class="card">
            <img src="img/anuncio.jpeg" alt="Dog and Owner">
            <div class="content">
                <h2>CONSEJOS</h2>
                <h1>Diarrea en perros y gatos: ¿debo preocuparme por mi mascota?</h1>
                <p>Todos los perros y gatos pueden sufrir diarrea alguna vez en su vida. Las causas más
                    habituales son infecciones bacterianas o víricas, así como causas alimentarias, como la ingesta
                    de...
                </p>
            </div>
        </div>
        <!-- Agrega más tarjetas según lo necesites -->
        <div class="card">
            <img src="img/anuncio.jpeg" alt="Dog and Owner">
            <div class="content">
                <h2>CONSEJOS</h2>
                <h1>Diarrea en perros y gatos: ¿debo preocuparme por mi mascota?</h1>
                <p>Todos los perros y gatos pueden sufrir diarrea alguna vez en su vida. Las causas más
                    habituales son infecciones bacterianas o víricas, así como causas alimentarias, como la ingesta
                    de...
                </p>
            </div>
        </div>
        <!-- Agrega más tarjetas según lo necesites -->
        <div class="card">
            <img src="img/anuncio.jpeg" alt="Dog and Owner">
            <div class="content">
                <h2>CONSEJOS</h2>
                <h1>Diarrea en perros y gatos: ¿debo preocuparme por mi mascota?</h1>
                <p>Todos los perros y gatos pueden sufrir diarrea alguna vez en su vida. Las causas más
                    habituales son infecciones bacterianas o víricas, así como causas alimentarias, como la ingesta
                    de...
                </p>
            </div>
        </div>
        <!-- Agrega más tarjetas según lo necesites -->
        <div class="card">
            <img src="img/anuncio.jpeg" alt="Dog and Owner">
            <div class="content">
                <h2>CONSEJOS</h2>
                <h1>Diarrea en perros y gatos: ¿debo preocuparme por mi mascota?</h1>
                <p>Todos los perros y gatos pueden sufrir diarrea alguna vez en su vida. Las causas más
                    habituales son infecciones bacterianas o víricas, así como causas alimentarias, como la ingesta
                    de...
                </p>
            </div>
        </div>
        <!-- Agrega más tarjetas según lo necesites -->
    </div>


    @endguest
    <script src="{{ asset('js/slider_responsive.js') }}"></script>
    <script src="{{ asset('js/menu_desplegable.js') }}"></script>

</body>

</html>