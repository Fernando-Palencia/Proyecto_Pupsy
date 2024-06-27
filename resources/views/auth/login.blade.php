<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/segunda_navbar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>home</title>
</head>

<body>

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

    <!-- Nueva barra de navegación debajo de la primera -->
    <div class="second-navbar">
        <nav>
            <a class="bi bi-cart4"></a>

            <a class="bi-facebook"></a>

            <a class="bi-instagram"></a>
        </nav>
        <div class="perros">INICIO DE SESIÓN</div>
    </div>

    <!-- El resto del contenido de tu página va aquí -->
    <section>

        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
            @endif

            <div class="container">
                <form action="/login" method="post">
                    @csrf
                    <form>
                        <!-- Campos del formulario aquí -->
                        <div class="form-group">
                            <label for="cedula"></label>
                            <input type="text" id="username" name="username" required placeholder="Correo/Cedula" />
                        </div>
                        <div class="form-group">
                            <label for="contrasena"></label>
                            <input type="password" id="password" name="password" required placeholder="Contraseña" />
                        </div>
                        <input type="submit" value="Iniciar sesión">
                    </form>
            </div>
    </section>
    @endguest

    <script src="{{ asset('js/menu_desplegable.js') }}"></script>

</body>

</html>