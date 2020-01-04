<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title></title>
    </head>
    <body>

    <a href="/Administradores/crear" class="btn btn-info">Agregar usuario</a>
    <a href="/Administradores/nuevaCategoria" class="btn btn-info">Agregar categoria</a>
    <a href="{{route('login')}}" class="btn btn-danger">Home</a>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Accion</th>
        </thead>

        <tbody>
            @foreach ($usuarios as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if ($user->rol == 3)
                        <span class="badge badge-primary">Administrador</span>
                        @elseif ($user->rol == 2)
                        <span class="badge badge-success">Distribuidor</span>
                        @else
                        <span class="badge badge-info">Miembro Comun</span>
                        @endif
                    </td>
                    <td>
                        @if ($user->id == Auth::user()->id)
                            <span class="badge badge-success">Eres Tu ;)</span>
                            @else
                            <a href="/Administradores/{{$user->id}}/editar" class="btn btn-warning">Editar</a> <a href="/Administradores/usuarios/{{$user->id}}/destroy" class="btn btn-danger">Eliminar</a>    
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$usuarios->links()}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>
