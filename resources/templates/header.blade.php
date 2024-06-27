<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/segunda_navbar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>home</title>
</head>
<body>


         <header>
        <div class="navbar">
            <img class="logo" src="img/LOGO_PUPSY.jpg" alt="Logo">

            
            <div class="barra">
                <button class="butom bi bi-search" type="bottom" style="background-color:"></button>
                <!-- Unicode para el carácter de lupa -->
                <input class="buscar" type="text" placeholder="Buscar...">

                <div class="links">
                    <ul class="nav-links">
                        <a href='/perros'>PERROS</a>
                        <a href='/gatos'>GATOS</a>
                        <a href='/blogs'>BLOG</a>
                        <a href='/servicios'>SERVICIOS</a>
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