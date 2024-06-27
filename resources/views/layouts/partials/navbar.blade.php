<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/segunda_navbar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>home</title>
</head>
<body>

   <!--  @auth
         <p> Bienvenido  {{auth()->user()->name ?? auth()->user()->username}}, estas autenticad@</p>

         <p>
            <a href="/logout">logoutr</a>
         </p>-->

         <header>
        <div class="navbar">
            <img class="logo" src="img/LOGO_PUPSY.jpg" alt="Logo">
            <div class="barra">
                <button class="butom bi bi-search" type="bottom" style="background-color:"></button>
                <!-- Unicode para el carácter de lupa -->
                <input class="buscar" type="text" placeholder="Buscar...">

                <div class="links">
                    <ul class="nav-links">
                        <a href="/perros">PERROS</a>
                        <a href="">GATOS</a>
                        <a href="">BLOG</a>
                        <a href="">SERVICIOS</a>
                    </ul>
                </div>
            </div>

            <div class="botoness">
                <button href="/logout" class="btn_registro">REGISTRATE</button>
                
                <button href="/logout" class="btn_registro">INICIA SESION</button>

                <button class="bottom-button">MIEMBRO PUPSY</button>

            </div>

        </div>

        </div>
    </header>
        
    </body>