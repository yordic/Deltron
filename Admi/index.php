<?php
$conexion = mysqli_connect("localhost", "root", "", "proyecto_integrador");
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3922c9a6a2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../Style/tabla.css">
    <link rel="stylesheet" href="../Style/barraDark.css">
    <link rel="stylesheet" href="../Style/footer.css">
    <link rel="stylesheet" href="../Style/botonAdmi.css">


    <title>COOLBOXNET</title>
</head>

<body>

    <header class="inicio">
        <div class="content">


            <!--color rojo "NET"-->
            <a href=""><i class="fa-solid fa-shop"></i></a><a class="rojo" href=""> COOLBOX<b class="sega1">NET</b></a>
        </div>

        <!--  <a href=""><i class="fa-solid fa-shop"></i> COOLBOXNET</a> 
    <a class="rojo" href =""> COOLBOX<b class="sega1">NET</b></a>
            </div>-->

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="nav">

            <a href="">Inicio</a>
            <a href="Categoria/categoriasSP.html">Categorias</a>
            <a href="">Tiendas</a>
            <a href="Categoria/nosotros.html">Nosotros</a>
            <a href="../php/cerrar_sesion.php" class="sesion">Cerrar sesion</a>


        </nav>
    </header>

    <section class="home" id="home">

        <table>
            <tr class="encabezado">
                <td>id</td>
                <td>nombre del producto</td>
                <td>Cantidad</td>
                <td>Precio unitario</td>
                <td>Precio total</td>
                <td>Fecha registrada</td>
            </tr>

            <?php
            $sql = "SELECT*FROM compras";
            $result = mysqli_query($conexion, $sql);

            while ($mostrar = mysqli_fetch_array($result)) {
            ?>




                <tr class="datosC">
                    <td><?php echo $mostrar['id'] ?></td>
                    <td class="nombreProduct"><?php echo $mostrar['nombre_producto'] ?></td>
                    <td><?php echo $mostrar['cantidad'] ?></td>
                    <td><?php echo $mostrar['precioUnit'] ?></td>
                    <td>$<?php echo  $mostrar['precioTotal'] ?></td>
                    <td><?php echo $mostrar['fecha_reg'] ?></td>
                </tr>

            <?php
            }
            ?>
        </table>
    </section>


    <div class="containerButton">
    <button onclick="imprimirPantalla()" class="button">
        <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="svgIcon">
            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"></path>
        </svg>
    </button>
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


    <script src="js/Script.js"></script>

    <script>
        function imprimirPantalla() {
            // Ocultar el botón de imprimir para evitar que se muestre en la versión impresa
            document.querySelector("footer").style.display = "none";
            document.querySelector("header").style.display = "none";
            document.querySelector("button").style.display = "none";



            // Imprimir la página
            window.print();

            // Restaurar la visibilidad del botón de imprimir después de imprimir
            document.querySelector("footer").style.display = "block";
            document.querySelector("header").style.display = "flex";
            document.querySelector("button").style.display = "block";


        }
    </script>
</body>

</html>