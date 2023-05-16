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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/tarjeta.css">

    <title>Document</title>
</head>

<body>


    <div id="app">
        <a href="php/cerrar_sesion.php" class="sesion">Cerrar sesion</a>

        <div class="card">
            <div class="holder"></div>
            <input type="text" id="inputCard">
            <input type="text" id="inputDate">
            <input type="text" id="inputCVV">
        </div>

        <div class="btn">
            Pagar
        </div>
    </div>



    <script src="js/tarjeta.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>