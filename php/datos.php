<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de compra</title>
</head>

<body>

    <?php

    include("../php/conexion.php");

    if (isset($_POST['register'])) { //Si se presiona el boton
        if (strlen($_POST['producto']) >= 1 && strlen($_POST['precio']) >= 1) {
            $producto1 = $_POST["producto"];
            $cantidad1 = $_POST["cantidad"];
            $precio1 = $_POST["precio"];
            $total1 = $_POST["total"];
            $fecha_reg = date("d/m/y");
            

            $consulta = "INSERT INTO compras(nombre_producto, cantidad, precioUnit, precioTotal, fecha_reg) VALUES ('$producto1','$cantidad1','$precio1','$total1', '$fecha_reg')";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
    ?>
                <?php
              header("location: ../Categoria/formulario.php?producto1=$producto1&cantidad1=$cantidad1&precio1=$precio1&total1=$total1&fecha_reg=$fecha_reg");


                ?>

            <?php
            } else {
            ?>
                <h3>No te registraste correctamente</h3>
            <?php
            }
        } else {
            ?>
            <h3>Completar cambos</h3>
    <?php
        }
    }


    /* $producto1 = $_POST["producto"];
    $cantidad1 = $_POST["cantidad"];
    $precio1 = $_POST["precio"];
    $total1 = $_POST["total"]; */




    ?>




</body>

</html>