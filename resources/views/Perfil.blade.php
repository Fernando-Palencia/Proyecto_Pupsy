<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sesion_abierta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/segunda_navbar.css') }}">
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
        <div class="perros">MI PERFIL</div>
    </div>
    <a href="https://chat.whatsapp.com/Fj3TyOxSCZUBkhhrMFqH9f" class="bi bi-whatsapp"></a>

    <section>
        <div class="container">

            @if(session('success'))
            <div>{{ session('success') }}</div>
            @endif

            <form action="{{ route('perfil.actualizar') }}" method="POST">
                @csrf
                <label class="form-group" for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ $user->name }}" required><br>

                <label class="form-group" for="cedula">Cédula:</label>
                <input type="text" id="username" name="username" value="{{ $user->username}}" required><br>

                <label class="form-group" for="celular">Celular:</label>
                <input type="text" id="celular" name="celular" value="{{ $user->celular }}" required><br>

                <label class="form-group" for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" value="{{ $user->ciudad }}" required><br>

                <label class="form-group" for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" value="{{ $user->email }}" required><br>

                <!-- <label class="form-group" for="contrasena">Nueva contraseña:</label>
        <input type="password" id="contrasena" name="contrasena"><br>

        <label class="form-group"  for="contrasena_confirmation">Confirmar contraseña:</label>
        <input type="password" id="contrasena_confirmation" name="contrasena_confirmation"><br> -->

                <button class="actualiza" type="submit">Actualizar perfil</button>
            </form>
        </div>
    </section>
    <script src="{{ asset('js/menu_desplegable.js') }}"></script>
    @endauth
</body>

</html>