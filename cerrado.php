<?php
require_once("funciones.php");
ob_start();
header("refresh: 3; url = login.php");




?>



<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo.css?uuid=<?php echo uniqid(); ?>">
      <?php include_once('icono.php'); ?>
    <title>Bierful | Cerrar Sesión</title>
  </head>
  <body>

<div class="total">

    <img src="img/ok.png" alt="Correcto">

    <div class="redireccionar">
      <h1>USTED HA CERRADO SESION CORRECTAMENTE</h1>
      <p>Espere por favor...</p>
      <?php ob_end_flush(); ?>
    </div>

</div>

  </body>
</html>
