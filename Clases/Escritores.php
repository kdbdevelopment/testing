<?php

class Escritores{

var $titulo;
var $subtitulo;
var $fecha;
var $noticia;
var $tema;


function setTitulo($par){

$this->titulo = $par;

}

function getTitulo(){

return $this->titulo;

}

function setSubtitulo($par){

$this->subtitulo = $par;

}

function getSubtitulo(){

return $this->subtitulo;
}

function setFecha($par){

    $this->fecha = $par;
    
    }
    
    function getFecha(){
    
    return $this->fecha;
    
    }
    function setNoticia($par){

        $this->noticia = $par;
        
        }
        
        function getNoticia(){
        
        return $this->noticia;
        
        }
        function setTema($par){

            $this->tema = $par;
            
            }
            
            function getTema(){
            
            return $this->tema;
            
            }

}
?>