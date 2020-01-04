<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;
use App\Producto;
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{

    public function index(){
      $user = Auth::user();
      $productos = Producto::all()->where('usuario_id', 'like', $user['id']);
      return view('productos', compact('productos'));
    }

    public function formulario(){
        $categorias = Categoria::all();
        return view('agregarProducto', compact('categorias'));
    }

    public function agregar(Request $datos)
    {
        $rules = [
            'nombre' => 'required|max:255',
            'precio' => 'required|integer',
            'descripcion' => 'max:255',
            'foto' => 'required|file|image',
        ];

        $this->validate($datos,$rules);
        $user = Auth::user();
        $productoNuevo = new Producto();

        $this->validate($datos, $rules);

        $ruta = $datos->file('foto')->store('public');
        $imagen = basename($ruta);
        $productoNuevo = new Producto();
        $productoNuevo->nombre = $datos['nombre'];
        $productoNuevo->precio = $datos['precio'];
        $productoNuevo->descripcion = $datos['descripcion'];
        $productoNuevo->foto = $imagen;
        $productoNuevo->usuario_id = $user['id'];
        $productoNuevo->categoria_id = $datos['categoria'];

        $productoNuevo->save();

        if ($user->rol == 1) {
            $user->name = $user['name'];
            $user->surname = $user['surname'];
            $user->email = $user['email'];
            $user->dni = $user['dni'];
            $user->rol = 2;

            $user->save();
        }


        return redirect('/productos');
    }

    public function detalle($id){
      $producto = Producto::find($id);
      return view('detalleProducto', compact('producto'));
    }

    public function editar($id){
      $producto = Producto::find($id);
      return view('editarProducto', compact('producto'));
    }

    public function actualizar(Request $datos){
      $validaciones = [
        'id' => 'required',
        'nombre' => 'required|max:71',
        'precio' => 'required|integer',
        'descripcion' => 'max:153',
        'foto' => 'required|file|image',
      ];
      // $mensajes = [];

      $this->validate($datos, $validaciones);

      $ruta = $datos->file('foto')->store('public');
      $imagen = basename($ruta);

      $productoEditado = Producto::find($datos["id"]);

      $productoEditado->nombre = $datos['nombre'];
      $productoEditado->precio = $datos['precio'];
      $productoEditado->descripcion = $datos['descripcion'];
      $productoEditado->foto = $imagen;

      $productoEditado->save();

      return redirect('/productos');

    }

}
