<?php

class Marcas{

private $nombre;
private $fecha;
private $origen;
}

public function_construct($nombre, $fecha, $origen){
  $this->nombre = $nombre;
  $this->fecha = $fecha;
  $this->origen = $origen;
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

public function getFecha()
{
  return $this->fecha;
}
public function setFecha($fecha)
{
  $this->fecha = $fecha;
  return $this;
}

public function getOrigen()
{
  return $this->origen;
}
public function setOrigen($origen)
{
  $this->origen = $origen;
  return $this;
}





 ?>
