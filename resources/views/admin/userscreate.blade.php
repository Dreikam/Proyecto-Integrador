<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title></title>
    </head>
    <body>
        <form class="" action="/Administradores/crear" method="post">
        @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <input class="form-control" type="text" name="name" value="" required>
            </div>

            <div class="form-group">
                <label for="surname">Apellido</label>
                <input class="form-control" type="text" name="surname" value="" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" name="email" value="" required>
            </div>

            <div class="form-group">
                <label for="dni">dni</label>
                <input class="form-control" type="number" name="dni" value="" required>
            </div>

            <div class="form-group">
                <label class="" for="">Fecha de nacimiento:</label>
                <input class="form-control" type="date" value="" name="nacimiento">
            </div>
            <div class="form-group">
                <label for="pais">Selecciona Tu Pais:</label>
                <select class="form-control" id="selecPais" name="pais">
                </select>
            </div>

            <div id="PROVar" class="form-group">

            </div>

            <div class="form-group">
                <label class="" for="genero">Género:</label>
                <select class="form-control" name="genero" >
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input class="form-control" type="password" name="password" value="" required>
            </div>

            <div class="form-group">
            <label for="rol">Tipo de usuario:</label>
            <select class="form-control" name="rol">
                <option value="1">Miembro Comun</option>
                <option value="3">Administrador</option>
            </select>
            </div>

            <div class="form-group">
            <button class="btn btn-primary" type="submit" name="button">Agregar Usuario</button>
            </div>

        </form>


        <script type="application/javascript" src="/js/admin.js"></script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>
