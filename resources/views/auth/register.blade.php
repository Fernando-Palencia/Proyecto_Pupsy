<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inicio_sesion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/segunda_navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>home</title>
</head>

<body>

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
        <div class="perros">REGISTRO</div>
    </div>
    <a href="https://chat.whatsapp.com/Fj3TyOxSCZUBkhhrMFqH9f" class="bi bi-whatsapp"></a>
    <!-- El resto del contenido de tu página va aquí -->
    <section>

        @if(session('register_success'))
        <div class="alert alert-success">
            {{ session('register_success') }}
        </div>
        @endif

        <div class="container">
            <form action="/register" method="post" enctype="multipart/form-data">
                @csrf
                <form>
                    <!-- Campos del formulario aquí -->
                    <div class="form-group">
                        <label for="nombres"></label>
                        <input type="text" id="name" name="name" required placeholder="nombres" />
                    </div>
                    <div class="form-group">
                        <label for="cedula"></label>
                        <input type="text" id="username" name="username" required placeholder="cedula" />
                    </div>
                    <div class="form-group">
                        <label for="celular"></label>
                        <input type="text" id="celular" name="celular" required placeholder="celular" />
                    </div>
                    <div class="form-group">
                        <label for="ciudad"></label>
                        <input type="text" id="ciudad" name="ciudad" required placeholder="ciudad" />
                    </div>
                    <div class="form-group">
                        <label for="correo"></label>
                        <input type="email" id="correo" name="email" required placeholder="correo" />
                    </div>
                    <div class="form-group">
                        <label for="contrasena"></label>
                        <input type="password" id="password" name="password" required placeholder="contraseña" />
                    </div>
                    <div class="form-group">
                        <label for="confirmar-contrasena"></label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            placeholder="confirmar contraseña" />
                    </div>

                    <label for="photo" class="file-input-label">
                        <input type="file" id="photo" name="photo" class="d-none" onchange="previewPhoto(this)">
                        <div id="photoContent" class="photo-content">
                            <img id="photoIcon" class="circle-icon" src="img/iconoPerfil.jpeg" alt="">
                            <div id="photoPreview" class="photo-preview"></div>
                        </div>
                    </label>
                    <input type="submit" value="Registrarse">
                </form>
        </div>
    </section>
    @endguest

    <script src="{{ asset('js/menu_desplegable.js') }}"></script>
    <script src="{{ asset('js/photoPerfil.js') }}"></script>

</body>

</html>