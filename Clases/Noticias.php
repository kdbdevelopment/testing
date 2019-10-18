<?php

class Escritores{

var $nombre;
var $apellido;
var $edad;

function setNombre($par){

$this->nombre = $par;

}

function getNombre(){

return $this->nombre;

}

function setApellido($par){

$this->apellido = $par;

}

function getApellido(){

return $this->apellido;
}

function setEdad($par){

    $this->edad = $par;
    
    }
    
    function getEdad(){
    
    return $this->edad;
    
    }

}
?>