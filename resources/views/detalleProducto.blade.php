@extends('layouts.principal')

@section('contenido')
<div class="container">

<div class="separador">
  <div class="row">
      <div class="col-md-6">
          <div class="product-block product-image">
              <img src="/storage/{{$producto->foto}}" alt="Imagen del producto">
          </div>
      </div>
      <div class="col-md-6">
          <div class="product-block">
          <h3>{{$producto->nombre}}</h3><br>

          <div class="product-info panel">
          <p>Precio: $ {{ number_format($producto->precio,2)}}</p>
          <h4>Icono</h4>
          <p>Pagá como mas te guste</p>
          <span>Iconos</span> <br>
          <a href="#">Mas informacion de pago</a>
          <h4>Tipo de envio:</h4>
          <select class="" name="">
              <option value="">Envialo!</option>
              <option value="">Acordar con el vendedor</option>
          </select>

          <p>
              <a class="btn btn-warning btn-block" href="#">Comprar</a>
          </p>

          </div>

      </div>
  </div>
  </div>
</div>

<div class="row">
  <div class="product-block col-md-12">
      @if ($producto->descripcion == true)
          <p>{{$producto->descripcion}}</p>
          @else
          <p>El vendedor no hay publicado una descripcion</p>
      @endif
  </div>
  </div>
</div>

@endsection
