<?php

require_once("funciones.php");




if ($_POST) {
  $errores = validarLogin($_POST);
  if (count($errores) == 0) {
    $usuario = buscarPorEmail($_POST["email"]);
    inicioSesion($usuario);
    header("Location:redirec.php");
    exit;
  }

}

if ($_SESSION == true) {
  header("Location:error.php");
}


?>











<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<link rel="stylesheet" href="css/pushbar.css">
	<link rel="stylesheet" href="css/estilo.css?uuid=<?php echo uniqid(); ?>">
  <?php include_once('icono.php'); ?>
	<title>Bierful | Iniciar Sesión</title>
</head>
  <body>
    <div class="login-box">
      <img class="logooo" src="img/copita.jpg" alt="Logo">
      <!-- <img src="" alt=""> -->
      <h1>Iniciar Sesión</h1>
      <form class="formBox" action="login.php" method="post">
        <!-- Email-->
        <label for="Email">Email</label>
        <input type="email" name="email" value="" placeholder="Ingrese Su Email">

        <!-- Contraseña -->
        <label for="Contraseña">Contraseña</label>
        <input class="pas" id="pass" type="password" name="contrasenia" value="" placeholder="Ingrese Su Contraseña">
        <input type="button" id="b1" value="Mostrar contraseña" onclick="mostrar()">
        <input type="hidden" id="b2" value="Ocultar contraseña" onclick="ocultar()">
        <!-- recordarme -->
        <input class="ts" type="checkbox" name="Recordarme" value="recordar">Recordarme

        <!-- Boton -->
        <button type="submit" name="button">Iniciar Sesión</button>

        <a href="recuPass.php">¿Olvidó su contraseña?</a>
        <a href="registro.php">Crear Cuenta</a>
        <a href="preguntas.php">Preguntas Frecuentes</a>


      </form>

    </div>

<div class="mostrar">
  <script src="js/mostrarocultar.js"></script>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
