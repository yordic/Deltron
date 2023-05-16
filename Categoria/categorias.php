<?php
    session_start();
    
    //Si no existe la variable sesion, llamada usuario, 
    if(!isset($_SESSION['usuario'])){
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
    <link rel="stylesheet" href="../Style/categorias.css">

    <title>Document</title>
</head>
<body>

    <header class="categoria">


        <a href="../index.html"><i class="fa-solid fa-shop"></i> Tienda</a>

        <div id="menu-bar" class="fas fa-bars" ></div>



        <nav class="nav">
           <a href="../index.html">Inicio</a>
            <a href="">Nosotros</a>
            <a href="">Categorias</a>
            <a href="../index.php">Iniciar sesion</a>

        </nav>
        
    </header>



    <section class="productos" id="productos">

        <div class="content">
        <a href="../php/cerrar_sesion.php">Cerrar sesion</a>
            <a href="celulares.html" class="button">Celulares</a>
            <a href="audifonos.html" class="button">Audifonos</a>
          

            


        </div>

        <div class="image">
             <!-- <img src="../img/Creative Block.png" alt=""> -->
        </div>
        
        
    </section>

   
        <script src="../js/Script.js"></script>
</body>
</html>