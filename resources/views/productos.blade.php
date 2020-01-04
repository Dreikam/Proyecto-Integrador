@extends('layouts.principal')

@section('contenido')


    <a href="/agregarProducto" class="btn btn-info">Agregar Producto</a>
        @foreach ($productos as $producto)
            <div class="misProductos">
                <img class="productoFotos" src="/storage/{{$producto->foto}}" alt="">
                <li> <a href="/detalleProducto/{{$producto->id}}" class="productosNombre">{{$producto->nombre}}</a> </li>
            </div>

        @endforeach

@endsection
