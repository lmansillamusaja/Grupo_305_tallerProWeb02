<?php
 class Persona
{
    public $nombre;
    public $apellido;
    function __construct($nombre,$apellido)
    {
        $this->nombre=$nombre;
        
        $this->apellido=$apellido;
    }

    function info()
    {
        echo "<h1>$this->nombre , $this->apellido</h1>";
    }

    function setNombre($nombre)
    {
        $this->nombre=$nombre;
    }
    function getNombre()
    {
        return $this->nombre;
    }

     function setApellido($apellido)
    {
        $this->apellido=$apellido;
    }
    function getApellido()
    {
        return $this->apellido;
    }

    
}





?>