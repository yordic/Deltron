
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Style/olvida_contrasena.css">
  <title>Cambio de contraseña</title>
</head>

<body>

  <div class="container">
    <img src="../img/FonLog/Logo.png" alt="">
  <form action="/php/procesar_recuperacion.php" method="POST">
  <p class="title"> COOLBOXNET</p>
  <h2>Cambiar contraseña</h2>
  <p>Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.</p>
  <input class="correo" type="email" name="email" placeholder="Correo electrónico" required>
    <div class="boton">
        <button class ="a" type="submit">Enviar</button>
        <button class ="b" type="submit">Cancelar</button>
    </div>
</form>
  </div>
</body>
</html>