<?php

include "./Personas.php";


class Docente extends Personas
{   public $cargo;


     function __construct($nombre,$apellido,$edad,$peso,$altura,$cargo)
    {
        parent::__construct($nombre,$apellido,$edad,$peso,$altura);
        $this->cargo=$cargo;

        
    }   

    function IMC()
    {
        $resultado=$this->peso/($this->altura*$this->altura);

        return round($resultado,2);
    }
  
}


?>