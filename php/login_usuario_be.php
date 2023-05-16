<?php

    session_start(); 
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena'");

    $resultado = $validar_login;

    //Si se encuentra un usuario y contraseña correctas se ejecuta lo siguiente:
    if(mysqli_num_rows($validar_login) > 0){
        
        $_SESSION['usuario'] = $correo;
        $filas = mysqli_fetch_array($resultado);


        if ($filas['id_cargo'] == 1) { // Administrador
            header("location: ../Admi/index.php");

            exit();
        } else if ($filas['id_cargo'] == 2) {
            header("location: ../Categoria/categorias.html?bloquearBtn=false");

            exit();
        }


        //Llevamos a tarjeta.php

       

        exit;
    }else{

        /* Caso contrario mostramos una alerta y cargamos nuevamente la pagina */
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../index.php";

                
            </script>
        ';
        exit;
    }
    

?>