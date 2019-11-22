<?php

class Categorias{

  private $nombre;
  private $vino;
  private $cerveza;
  private $whisky;
}

public function_construct($nombre, $vino, $cerveza, $whisky){
  $this->nombre = $nombre;
  $this->vino = $vino;
  $this->cerveza = $cerveza;
  $this->whisky = $whisky;
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

public function getVino()
{
  return $this->vino;
}
public function setVino($vino)
{
  $this->tipo = $vino;
  return $this;
}

public function getCerveza()
{
  return $this->cerveza;
}
public function setCerveza($cerveza)
{
  $this->tipo = $cerveza;
  return $this;
}

public function getWhisky()
{
  return $this->whisky;
}
public function setWhisky($whisky)
{
  $this->tipo = $whisky;
  return $this;
}




 ?>
