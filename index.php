<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon page -->
    <link rel="shortcut icon" href="./img/Xicote.svg" type="image/x-icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Gudea:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600;700&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- CSS Link -->
    <link rel="stylesheet" href="./styles/index-styles.css">
    <link rel="stylesheet" href="./styles/scroll-styles.css">
    <link rel="stylesheet" href="./styles/parallax.css">
    <link rel="stylesheet" href="./styles/footer-styles.css">
    <link rel="stylesheet" href="./styles/navbar.css">

    <!-- image compress -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('[data-src]').each(function () {
                var $elemento = $(this);
                var src = $elemento.data('src');
                $elemento.css('background-image', 'url(image.php?src=' + src + ')');
            });
        });
    </script>

    <!-- Tittle Page -->
    <title>Sazón MáXico | Inicio</title>

</head>

<body>
    <!-- autenticacion de usuarios -->
    <?php include "auth_check.php" ?>
    <!-- conexion a BD -->
    <?php include "conexion.php" ?>

    <!-- Nav Bar -->
    <nav class="bar">
        <!-- Logo -->
        <img src="./image.php?src=./img/navbar-icons/logo-recortado.svg" alt="SázonMáXico" class="logo">
        <!-- Links Menu -->
        <ul class="links">
            <li><a href="./index.php">Inicio</a></li>
            <li><a href="./carta.html">Carta</a></li>
            <li><a href="./menu-del-dia.php">Menú del Día</a></li>
            <li><a href="./evento1.html">Eventos</a></li>
            <li><a href="./reservas-inicio.html">Reservas</a></li>
        </ul>
        <!-- Iniciar sesion button -->
        <!-- <a href="./login.php" class="login">Iniciar Sesión</a> -->
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        if (isLoggedIn($conn)) {
            echo '<a href="./logout.php" class="login">Cerrar Sesión</a>';
        } else {
            echo '<a href="./login.php" class="login">Iniciar Sesión</a>';
        }
        ?>
        <!-- Dropdown button -->
        <div class="dropdown-button-container">
            <img src="./image.php?src=./img/navbar-icons/menu.png" alt="menu" class="dropdown" id="activar-boton"
                onclick="mostrarMenu()">

            <img src="./image.php?src=./img/navbar-icons/close.png" alt="menu" class="dropdown" id="desactivar-boton"
                onclick="ocultarMenu()">
        </div>

        <!-- dropdown menu -->
        <ul class="dropdown-menu active" id="dropdown-menu">
            <li class="dropdown-nav"><a href="./index.php">Inicio</a></li>
            <li class="dropdown-nav"><a href="./carta.html">Carta</a></li>
            <li class="dropdown-nav"><a href="./menu-del-dia.php">Menú del Día</a></li>
            <li class="dropdown-nav"><a href="./evento1.html">Eventos</a></li>
            <li class="dropdown-nav"><a href="./reservas-inicio.html">Reservas</a></li>
            <!-- settings -->
            <hr class="dropdown-line">
            <li class="settings"><a href="./login.php"><img src="./image.php?src=./img/navbar-icons/usuario.png"
                        alt="user"> Iniciar
                    Sesión</a></li>
            <li class="settings"><a href="#"><img src="./image.php?src=./img/navbar-icons/documento.png"
                        alt="user">Política
                    y
                    Privacidad</a></li>
            <li class="settings"><a href="#"><img src="./image.php?src=./img/navbar-icons/interrogatorio.png"
                        alt="help">Ayuda</a></li>
        </ul>
    </nav>
    <header class="parallax" data-src="./img/index-img/Bg-restaurante.svg">
        <h1>Sázon MáXico</h1>
    </header>
    <!-- Main Content -->
    <main class="container">
        <!-- Menu del Dia Section -->
        <section class="menu-container">
            <img loading="lazy" src="./image.php?src=./img/index-img/logo-amarillo.svg" alt="logo-SazónMáXico">
            <div class="menu-del-dia">

                <!-- Menu del Día Dinámico (Horario) -->
                <div class="menu-horario">
                    <span>menú de medio día</span>
                    <span>De lunes a viernes de 10:00 a 16:00</span>
                </div>
                <!-- Precio y Menú -->
                <div class="menu-costo">
                    <span class="menu">Sopa a elegir + Arroz + Bebidas + Postre</span>

                    <span class="costo">$159</span>
                </div>
            </div>

        </section>
        <!-- Section Banquete -->
        <section class="banquete-container">
            <!-- header -->
            <div class="banquete-header">
                <img loading="lazy" src="./image.php?src=./img/index-img/Azteca.svg" alt="Azteca image">
                <h2>El Banquete Azteca</h2>
                <img loading="lazy" src="./image.php?src=./img/index-img/Azteca-invert.svg" alt="Azteca image invert">
            </div>

            <!-- banquete scroll images -->
            <div class="banquete-scroll">
                <img loading="lazy" src="./image.php?src=./img/index-img/platillo-1-banquete.svg" alt="platillo 1">
                <img loading="lazy" src="./image.php?src=./img/index-img/platillo-2-banquete.svg" alt="platillo 2">
                <img loading="lazy" src="./image.php?src=./img/index-img/platillo-3-banquete.svg" alt="platillo 3">
                <img loading="lazy" src="./image.php?src=./img/index-img/platillo-4-banquete.svg" alt="platillo 4">
            </div>
            <!-- Banquete Info -->
            <p>El plato principal incluye una generosa porción de tamal de maíz, relleno de pollo en salsa verde y
                envuelto en hojas de maíz. Además, se sirve una porción de chiles en nogada, un platillo icónico que
                representa los colores de la bandera mexicana y combina la dulzura de la nuez con el sabor picante del
                chile poblano relleno de carne de res y frutas.</p>
            <p>El combo también incluye guarniciones como frijoles negros refritos sazonados con especias tradicionales,
                arroz rojo con el toque distintivo del azafrán y una ensalada fresca de nopales asados con tomates y
                cebolla. Todo ello se acompaña de tortillas de maíz recién hechas y una selección de salsas picantes
                para aquellos que buscan un toque extra de sabor.</p>

            <!-- banquete line -->
            <hr>
        </section>
        <!-- Section Combos -->
        <section class="combos-container parallax" data-src="./img/index-img/combo-1-izquierda.jpg">
            <!-- combos info -->
            <div class="combos">
                <div class="combos-aztecas">
                    <h1>combos <br><span>aztecas</span></h1>
                    <span>nuestras recomendaciones para ti</span>
                </div>
                <button type="button" id="redireccionarBtn">
                    <span>Reserva aquí</span>
                </button>
            </div>
        </section>

        <!-- end of main -->
        <div class="end-main">
            <hr>
        </div>
    </main>
    <!-- footer page -->
    <footer>
        <div class="footer-top">
            <!-- left list -->
            <ul class="footer-list-left">
                <li><a href="./carta.html">Carta</a></li>
                <li><a href="./reservas-inicio.html">Reserva</a></li>
                <li><a href="#">Política de Privacidad</a></li>
            </ul>
            <!-- center logo -->
            <a href="./index.php">
                <img loading="lazy" src="./image.php?src=./img/index-img/logo-footer.svg" alt="logo SazónMáXico">
            </a>
            <!-- list right -->
            <ul class="footer-list-right">
                <li>
                    <h3>horario xicotepec de juarez</h3>
                </li>
                <li>
                    Lunes a Jueves
                    <br>
                    09:00 - 18:00h
                </li>
                <li>
                    Viernes a Sábado
                    <br>
                    10:00 - 20:00h
                </li>
                <li>
                    Domingo
                    <br>
                    10:00 - 17:00h
                    <br>
                    20:00 - 23:00h
                </li>
            </ul>
        </div>
        <hr>
        <div class="footer-bottom">
            <span>© Copyright 2022 Sazón MáXico - Todos los Derechos Reservados</span>
            <ul class="social">
                <li>
                    <a href="https://www.facebook.com." target="_blank">
                        <img loading="lazy" src="./image.php?src=./img/footer-icons/facebook.png" alt="facebook">
                    </a>
                </li>
                <li>
                    <a href="tel:764 764 3687" target="_blank">
                        <img loading="lazy" src="./image.php?src=./img/footer-icons/tel.png" alt="teléfono">
                    </a>
                </li>
                <li>
                    <a href="mailto:restaurantesazonmaxico@outlook.com" target="_blank">
                        <img loading="lazy" src="./image.php?src=./img/footer-icons/mail.png" alt="correo">
                    </a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- Scripts JS -->
    <script src="./js/nav-bar.js"></script>
    <!-- redireccionar -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var redireccionarBtn = document.getElementById("redireccionarBtn");

            redireccionarBtn.addEventListener("click", function () {
                // URL nueva
                window.location.href = "./reservas-inicio.html";
            });
        });
    </script>

</body>

</html>