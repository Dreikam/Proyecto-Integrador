<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title></title>
    </head>
    <body>
        <form class="" action="/Administradores" method="post">
        {{csrf_field()}}
        @method('PUT')
        <input type="hidden" name="id" value="{{$user->id}}">
        {{$user->id}}

            <div class="form-group">
                <label for="name">Nombre</label>
                <input class="form-control" type="text" name="name" value="{{$user->name}}" required>
            </div>

            <div class="form-group">
                <label for="surname">Apellido</label>
                <input class="form-control" type="text" name="surname" value="{{$user->surname}}" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" name="email" value="{{$user->email}}" required>
            </div>

            <div class="form-group">
                <label for="dni">Dni</label>
                <input class="form-control" type="number" name="dni" value="{{$user->dni}}" required>
            </div>

            <div class="form-group">
            <label for="rol">Tipo de usuario:</label>
            <select class="form-control" name="rol">
                <option value="1">Miembro Comun</option>
                <option value="2">Distribuidor</option>
                <option value="3">Administrador</option>
            </select>
            </div>

            <div class="form-group">
            <button class="btn btn-primary" type="submit" name="button">Editar Usuario</button>
            </div>

        </form>



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>
