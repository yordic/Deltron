<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3922c9a6a2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../Style/formulario.css">
    <link rel="stylesheet" href="../Style/barra.css">
    <link rel="stylesheet" href="../Style/footer.css">

</head>

<body>

    <header class="inicio">


        <a href=""><i class="fa-solid fa-shop"></i> COOLBOXNET</a>

        <div id="menu-bar" class="fas fa-bars"></div>



        <nav class="nav">

            <a href="../index.html">Inicio</a>
            <a href="../Categoria/categoriasSP.html">Categorias</a>
            <a href="../Categoria/categoriasSP.html">Tienda</a>
            <a href="nosotros.html">Nosotros</a>


        </nav>
    </header>


    <div class="container">
        <a href="../php/cerrar_sesion.php" class="sesion">Cerrar sesion</a>

        <form action="../php/formulario.php" method="POST" id="form">
            <h1>Formulario de datos</h1>
            <?php
            if (isset($_GET['producto1'])) {
                $producto1 = $_GET['producto1'];
                $cantidad1 = $_GET['cantidad1'];
                $precio1 = $_GET['precio1'];
                $total1 = $_GET['total1'];
                $fecha_reg  = $_GET['fecha_reg'];

                

                $productG = $producto1;
            } else {
                echo "No se encontró el producto en el enlace.";
            }
            ?>

            <div class="input-control">
                <label for="nombre">Nombres</label>
                <input id="nombre" name="nombre" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="apellido">Apellidos</label>
                <input id="apellido" name="apellido" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="telefono">Telefono</label>
                <input id="telefono" name="telefono" type="number">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="correo">Correo</label>
                <input id="correo" name="correo" type="email">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="direccion">Direccion</label>
                <input id="direccion" name="direccion" type="text">
                <div class="error"></div>
            </div>

            <div class="valoresContainer">
                <input type="hidden" name="producto" value="<?php echo $producto1 ?>">
                <input type="hidden" name="cantidad" value="<?php echo $cantidad1 ?>">
                <input type="hidden" name="precio" value="<?php echo $precio1 ?>">
                <input type="hidden" name="total" value="<?php echo $total1 ?>">
                <input type="hidden" name="fecha" value="<?php echo $fecha_reg ?>">

            </div>



            <button type="submit" class="btnRegister" name="btnRegister">Continuar</button>




        </form>
    </div>


    <footer>

        <div class="container-footer-all">

            <div class="container-body">

                <div class="colum1">
                    <h1>Mas informacion de la compañia</h1>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Hic sequi fugiat
                        molestiae accusamus excepturi exercitationem atque
                        necessitatibus neque voluptates aspernatur omnis, maiores possimus
                        natus numquam reprehenderit nobis velit eligendi ad.</p>

                    <!--  <img src="img/Logo.jpeg" alt=""> -->
                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="row">
                        <a href=""> <img src="../img/footer/facebook.png" alt=""></a>

                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row">

                        <a href=""><img src="../img/footer/twitter.png" alt=""></a>

                        <label>Siguenos en Twitter</label>
                    </div>
                    <div class="row">
                        <a href=""> <img src="../img/footer/Instagram.png" alt=""></a>

                        <label>Siguenos en Instagram</label>
                    </div>




                </div>

                <div class="colum3">
                    <!--  -->
                    <h1>Metodos de pago</h1>

                    <div class="row2">
                        <img src="../img/footer/Master-card.jpg" alt="">


                    </div>
                    <div class="row2">
                        <img src="../img/footer/Visa-Logo-2005.jpg" alt="">


                    </div>
                    <div class="row2">
                        <img src="../img/footer/yape.jpg" alt="">
                    </div>


                </div>




            </div>

        </div>



    </footer>

    <script src="../js/form.js"></script>
</body>

</html>