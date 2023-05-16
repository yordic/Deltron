<?php
    include 'conexion_be.php';

    if(empty($_POST['nombre_completo']) && empty($_POST['correo']) && empty($_POST['contrasena'])) {
        echo '
            <script>
                alert("Por favor completa todos los campos");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    /*Sentencia para insertar datos en la BD*/
    $query = "INSERT INTO usuarios(nombre_completo, correo, contrasena, id_cargo) /*Columnas de la tabla usuario*/ 
             VALUES ('$nombre_completo','$correo', '$contrasena', 2)"; /*Variables establecidas*/
   
   /* Verificar el correo no se repita en la base de datos */
   $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$correo'");

   if(mysqli_num_rows($verificar_correo)>0){
    echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>
    ';
    exit();
   }

   
   
   
   $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>