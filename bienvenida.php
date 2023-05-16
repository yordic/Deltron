<?php
    session_start();
    
    //Si no existe la variable sesion, llamada usuario, 
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "index.php";
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
    <title>Document</title>
</head>
<body>

    <h1>Bienvenido a mi mundo</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
    
</body>
</html>