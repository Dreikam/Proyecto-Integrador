<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function faq()
    {
        return view('FAQ');
    }

    public function todasCategorias(){
        $categorias = Categoria::all();
        return view('categorias', compact('categorias'));
    }

    public function detalleCategoria($id){
        $categoria = Categoria::find($id);
        $productoCategoria = Producto::all()->where('categoria_id', 'like', $id);
        return view('detallecategorias', compact('categoria', 'productoCategoria'));
    }

}
