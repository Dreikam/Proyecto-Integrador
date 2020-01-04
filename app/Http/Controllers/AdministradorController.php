<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Producto;
use App\Categoria;
use App\subCategoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class AdministradorController extends Controller
{

     public function __construct()
     {
        $this->middleware('admin');
     }

    public function index(){
        $usuarios = User::paginate(5);

        return view('admin.listadoAdmin', compact('usuarios'));
    }

    public function create(){
        return view('admin.userscreate');
    }

    public function store(Request $request){
        $user = new User($request->all());
        $user->password = Hash::make($request['password']);
        $user->encriptado = Crypt::encryptString($request->password);

        //dd($user);
        $user->save();

        return redirect('/Administradores');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/Administradores');
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.editarUsuario', compact('user'));
    }

    public function update(Request $request){
        $user = User::find($request->id);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->dni = $request->dni;
        $user->rol = $request->rol;

        $user->save();

        return redirect('/Administradores');
    }

    public function crearcategoria(){
        return view('admin.crearCategoria');
    }

    public function guardarCategoria(Request $request){
      $rules = [
        'name' => 'required|max:50',
      ];

      $this->validate($request, $rules);

      $categoriaNueva = new Categoria();

      $categoriaNueva->name = $request->name;

      $categoriaNueva->save();


      return redirect('/Administradores');
    }


}
