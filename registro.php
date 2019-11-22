<?php
include_once('paises.php');
require_once('funciones.php');


if ($_POST) {

  $errores = validarRegistro($_POST);

  if (count($errores) == 0) {

      $usuario = buscarPorEmail($_POST["email"]);

      if ($usuario != null) {
        $errores[] = "El email ya se encuentra registrado";
      } else {

        $avatar = armarImagen($_FILES["avatar"]);
        $usuario = armarUsuario($_POST, $avatar);
        guardarUsuario($usuario);

        header("Location:login.php");
        exit;
      }
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
	<title>Registro | Bierful</title>
</head>
  <body>
    <header>
      <?php if (isset($errores)): ?>
        <?php foreach ($errores as $key => $error): ?>
            <li class="alert alert-danger"><?=$error?></li>
        <?php endforeach; ?>
      <?php endif; ?>
    </header>
    <div class="container">
      <div class="row">
        <div class="login-box register col-sm-8 col-md-6 col-lg-4 col-xl-4">
          <form class="formBox" action="registro.php" method="post" enctype="multipart/form-data">



            <img class="logooo" src="img/copita.jpg" alt="">

            <h1 class="regis">Registrarse</h1>

              <!-- Nombre -->
              <label for="nombre">Nombre</label>
                <input type="text" class="" value="<?=persistir("nombre")?> " name="nombre" required>
                <!-- Apellido -->
              <label for="apellido">Apellido</label>
                <input type="text" class="" value="<?=persistir("apellido")?> " name="apellido" required>
                <!-- telefono -->
              <label for="telefono">Telefono</label>
                <input type="number" class="" value="<?=persistir("telefono")?>" name="telefono"  required>
                <!-- Fecha de Nacimiento -->
              <label for="nacimiento">Fecha de Nacimiento</label>
                <input type="date" class="" min="1960-01-01" max="2001-12-31" name="nacimiento" value="<?=persistir("nacimiento")?>"  required>
                <!-- Nacionalidad -->
              <label for="nacionalidad">Nacionalidad</label>
                <select class="alert alert-primary" name="nacionalidad">
                  <option value="Selecciona un Pais">Selecciona un Pais</option>
                  <?php foreach ($paises as $pais) : ?>
                      <option value=<?=$pais?>><?=$pais?></option>
                  <?php endforeach ?>
                </select><br>
                <!-- Sexo -->
                <label for="genero">Genero:</label>
                <input class="ts" type="radio" name="genero" value="Masculino">Masculino <br>
                <input class="ts" type="radio" name="genero" value="Femenino">Femenino <br>
                <input class="ts" type="radio" name="genero" value="Otro">Prefiero no decirlo
                <!-- email -->
              <label for="email" value="<?=persistir("email")?>" >Email</label>
                <input type="email" class="" name="email" required>
                <!-- Contraseña y confirmar contraseña -->
              <label for="contrasenia">Contraseña</label>
                <input type="password" class="pasin" name="contrasenia" required>
              <small>Nunca compartas tu contraseña con otros</small>

              <label class="chiquito" for="confircontra">Confirmar Contraseña</label>
              <input type="password" required name="confircontra">

              <div class="img">
                <div id="divInputLoad">
                  <label for="avatar">Foto de Perfil</label>
          	      <div id="divFileUpload">
          			<input id="file-upload" type="file" accept="image/*" / name="avatar" required>
          	</div>
          	<div id="file-preview-zone">
          	</div>
          </div>
              </div>


              <div class="row">
                <div class="col-9">




              <!-- Boton enviar -->
          <button type="submit" name="button">Registrar</button>
          </div>
          </div>

          <a href="login.php">¿Ya tienes cuenta?</a>
    </form>
  </div>
      </div>
      </div>


      <script>
          function readFile(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      var filePreview = document.createElement('img');
                      filePreview.id = 'file-preview';
                      filePreview.src = e.target.result;
                      console.log(e.target.result);

                      var previewZone = document.getElementById('file-preview-zone');
                      previewZone.appendChild(filePreview);
                  }

                  reader.readAsDataURL(input.files[0]);
              }
          }

          var fileUpload = document.getElementById('file-upload');
          fileUpload.onchange = function (e) {
              readFile(e.srcElement);
          }

      </script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
