@extends('layouts.principal')

@section('titulo')
Bierful | Agregar Producto
@endsection

@section('contenido')

<div class="container">
<div class="productoAgregar row">
      <h3>Agrega un Producto</h3>
  <form class="formBox" action="/agregarProducto" method="post" enctype="multipart/form-data">
    {{-- {{csrf_field()}} --}}
    @csrf
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    </ul>

<div class="row">
    <div class="productoNombre">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" value="{{old('nombre')}}">
    </div>
    <div class="productoPrecio">
      <label for="precio">Precio:</label>
      <input type="number" name="precio" value="{{old('precio')}}">
    </div>
    <div class="productoCategoria">
      <label for="categoria">Categoria:</label>
      <select name="categoria">
        @foreach ($categorias as $categoria)
          <option value="{{$categoria->id}}">{{$categoria->name}}</option>
        @endforeach
      </select>
    </div>
</div>
    <div class="productoDescripcion">
      <label for="descripcion">Descripcion:</label>
      <textarea name="descripcion" class="descripcionproduct" rows="8" cols="80"></textarea>
    </div>

    <div class="img">
        <label for="foto">Foto del Producto</label>
        <div id="divFileUpload">
          <input id="file-upload" type="file" accept="image/*" name="foto" required>
        </div>
      <div id="divInputLoad">
            <div id="file-preview-zone">
            </div>
        </div>
    </div>
    <div class="bot">
      <button type="submit" name="button">Guardar Producto</button>
    </div>

  </form>
</div>
</div>

<script type="application/javascript" src="/js/detallefoto.js">

</script>
@endsection
