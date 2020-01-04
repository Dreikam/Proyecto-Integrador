<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/profile', "usuarioController@show")->name("perfil")->middleware('auth');

Route::post('/profile', "usuarioController@update");

Route::post('/profile/datosUsuario', "usuarioController@updateDatosUsuario");

Route::post('/profile/datosContacto', "usuarioController@updateContactoUsuario");

Route::get('/Categorias', 'HomeController@todasCategorias')->name('categorias');

Route::get('/Categorias/{id}', 'HomeController@detalleCategoria')->name('detallecategorias');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

Route::get('/Nosotros', 'HomeController@acerca')->name('acercade');

Route::get('/FAQ', 'HomeController@faq')->name('FAQ');

Route::get('/productos', 'ProductosController@index')->name('productos')->middleware('auth');

Route::get('/agregarProducto', 'ProductosController@formulario')->name('agregarProducto')->middleware('auth');
Route::post('/agregarProducto', 'ProductosController@agregar');

Route::get('/detalleProducto/{id}', 'ProductosController@detalle')->name('detalleProducto');

Route::get('/editarProducto/{id}', 'ProductosController@editar')->name('editarProducto')->middleware('auth');
Route::put('/editarProducto', 'ProductosController@actualizar');

// Rutas de Administradores
Route::get('/Administradores', 'AdministradorController@index')->name('admin.listadoAdmin');

Route::get('/Administradores/crear', 'AdministradorController@create')->name('admin.userscreate');

Route::post('/Administradores/crear', 'AdministradorController@store');

Route::get('/Administradores/{id}/editar', 'AdministradorController@edit');

Route::put('/Administradores', 'AdministradorController@update');

Route::get('/Administradores/usuarios/{id}/destroy', 'AdministradorController@destroy');

Route::get('/Administradores/nuevaCategoria', 'AdministradorController@crearcategoria')->name('admin.crearCategoria');

Route::post('/Administradores/nuevaCategoria', 'AdministradorController@guardarCategoria');
