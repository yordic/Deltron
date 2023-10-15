
<?php
    session_start();
    
    //Si existe una sesion
    if(isset($_SESSION['usuario'])){
        header("location: Categoria/formulario.php");

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="Style/login.css">

</head>
<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar a la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar sesion</button>
                </div>
                
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrarte para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">Registrase</button>
                </div>
            </div>

            <!-- Formulario de login y registro -->
            <div class="contenedor__login-register">
                <!-- Login -->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button id="btnEntrar">Entrar</button>
                    <a href="/php/recueperar_contrasena.php">¿Olvidaste tu contraseña?</a>

                </form>

                <!-- Registro -->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                     <h2>Registrase</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" id="nombre">
                    <input type="text" placeholder="Correo electronico" name="correo" id="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrase</button>

                    
                </form>
            </div>

        </div>
    </main>
    <script src="js/login.js"></script>
</body>
</html>