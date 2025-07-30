<?php
class Persona{
    //propiedades
    protected $nombre;
    public $apellido;
    public $edad;
    
    //constructor
    function __construct($nombre,$apellido,$edad)
    {
        $this->nombre=$nombre;
        
        $this->apellido=$apellido;
        
        $this->edad=$edad;
    }
  

    function setNombre($nombre)
    {
        $this->nombre=$nombre;
    }
    function getNombre()
    {
        return $this->nombre;
    }
/*
    function mostrarNombre()
    {
       return $this->nombre;
    }
*/

    
}

class Docente extends Persona{




    function getNombreDocente()
    {
        return $this->nombre;
    }


}


?>