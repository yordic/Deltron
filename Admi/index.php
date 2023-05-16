<?php
$conexion = mysqli_connect("localhost","root","","proyecto_integrador");
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

    
    <title>COOLBOXNET</title>
</head>
<body>

    <header class="inicio">
        <div class="content">

        
        <!--color rojo "NET"-->
            <a href=""><i class="fa-solid fa-shop"></i></a><a class="rojo" href =""> COOLBOX<b class="sega1">NET</b></a></div>

     <!--  <a href=""><i class="fa-solid fa-shop"></i> COOLBOXNET</a> 
    <a class="rojo" href =""> COOLBOX<b class="sega1">NET</b></a>
            </div>-->

        <div id="menu-bar" class="fas fa-bars" ></div>

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
    $result = mysqli_query($conexion,$sql);

    while($mostrar = mysqli_fetch_array($result)){
        ?>
    

   

    <tr class="datosC">
        <td><?php echo $mostrar['id']?></td>
        <td  class="nombreProduct"><?php echo $mostrar['nombre_producto']?></td>
        <td><?php echo $mostrar['cantidad']?></td>
        <td><?php echo $mostrar['precioUnit']?></td>
        <td>$<?php echo  $mostrar['precioTotal']?></td>
        <td><?php echo $mostrar['fecha_reg']?></td>
    </tr>

    <?php
        }
    ?>
        </table>
    </section>


    <footer>

        <h1 onclick="imprimirPantalla()">Imprimir</h1>
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


  // Imprimir la página
  window.print();

  // Restaurar la visibilidad del botón de imprimir después de imprimir
  document.querySelector("footer").style.display = "block";
  document.querySelector("header").style.display = "flex";

}


    </script>
</body>
</html>