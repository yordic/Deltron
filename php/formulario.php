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

        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1) {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $telefono = $_POST["telefono"];
            $correo = $_POST["correo"];
            $direccion = $_POST["direccion"];

            $producto = $_POST["producto"];
            $cantidad = $_POST["cantidad"];
            $precio = $_POST["precio"];
            $total = $_POST["total"];
            $fecha = $_POST["fecha"];

            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            







            $consulta = "INSERT INTO formulario(nombre, apellido, telefono, correo, direccion) VALUES ('$nombre','$apellido','$telefono','$correo', '$direccion')";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
    ?>
                 <?php
                header("location: ../Categoria/tarjetas.php?producto=$producto&cantidad=$cantidad&precio=$precio&total=$total&fecha=$fecha&nombre=$nombre&apellido=$apellido&direccion=$direccion&telefono=$telefono");
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


    /* $producto1 = $_POST["producto"];
    $cantidad1 = $_POST["cantidad"];
    $precio1 = $_POST["precio"];
    $total1 = $_POST["total"]; */




    ?>




</body>

</html>