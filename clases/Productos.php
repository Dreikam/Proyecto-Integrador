<?php

class Productos{

  private $nombre;
  private $marca;
  private $precio;
  private $cantidad;
}

public function_construct($nombre, $marca, $precio, $cantidad){
  $this->nombre = $nombre;
  $this->marca = $marca;
  $this->precio = $precio;
  $this->cantidad = $cantidad;
}

public function getNombre()
{
  return $this->nombre;
}
public function setNombre($nombre)
{
  $this->nombre = $nombre;
  return $this;
}

public function getMarca()
{
  return $this->marca;
}
public function setMarca($marca)
{
  $this->marca = $marca;
  return $this;
}

public function getPrecio()
{
  return $this->precio;
}
public function setPrecio($precio)
{
  $this->precio = $precio;
  return $this;
}

public function getCantidad()
{
  return $this->cantidad;
}
public function setCantidad($cantidad)
{
  $this->cantidad = $cantidad;
  return $this;
}




 ?>
