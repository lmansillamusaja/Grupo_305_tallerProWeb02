<?php 

include_once "./Persona.php";

class Docente extends Persona
{   
    public $cargo;
    function __construct($nombre,$apellido,$cargo)
    {
        parent::__construct($nombre,$apellido);
        $this->cargo=$cargo;
        
    }

    function getCargo()
    {
        return $this->cargo;
    }

    function info()
    {
        parent::info();
        
    }
}

?>