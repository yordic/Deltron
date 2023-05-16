<?php
session_start();

//Si no existe la variable sesion, llamada usuario, 
if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "index.html";
            </script>
        ';
    session_destroy();
    die(); //Para detener el codigo y no avance
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3922c9a6a2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Style/estilos.css">
    <link rel="stylesheet" href="Style/barra.css">
    <title>Document</title>
</head>
<body>

    <header class="inicio">
        <div class="content">

       <nobr> <a href=""><i class="fa-solid fa-shop rojo"></i>COOLBOX</a><a>NET</a>
       </nobr> </div>

        <div id="menu-bar" class="fas fa-bars" ></div>



        <nav class="nav">

            <a href="">Inicio</a>
            <a href="Categoria/categorias.html">Categorias</a>
            <a href="">Tiendas</a>
            <a href="">Nosotros</a>

        </nav>
    </header>

    <section class="home" id="home">

    
        <!-- Cuando presionamos en cerrar sesion ejecutamos cerrar_sesision.php -->
    <a href="php/cerrar_sesion.php" class="sesion">Cerrar sesion</a>

        <div class="content">
        <div class="contH3">
                <h3 class="priH3">COOLBOX</h3><h3 class="segH3">NET</h3>
            </div>
            <p>Bienvenidos a COOLBOXNET, tu tienda online de confianza para adquirir los últimos productos tecnológicos al mejor precio. 
            Nos dedicamos a brindar soluciones innovadoras para facilitar y mejorar la vida de nuestros clientes.</p>
            <a href="Categoria/categorias.html" class="btn">Categorias </a>
        </div>

        <div class="image">
            <img src="img/FonLog/Logo.png" alt="">
        </div>
    </section>

   
    <script src="js/Script.js"></script>
</body>
</html>