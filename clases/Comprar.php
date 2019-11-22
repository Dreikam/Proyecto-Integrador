<?php

class Comprar{

private $nombre;
private $producto;
private $hora;
}

public function_construct($nombre, $producto, $hora){
$this->nombre = $nombre;
$this->producto = $producto;
$this->hora = $hora;
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

public function getProducto()
{
    return $this->producto;
}
public function setProducto($producto)
{
    $this->producto = $producto;
    return $this;
}

public function getHora()
{
    return $this->hora;
}
public function setHora($hora)
{
    $this->hora = $hora;
    return $this;
}
 ?>
