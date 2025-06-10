<?php 

include_once "/Semana08/dia02_herencia/Persona.php";

class Administrador extends Persona
{   
    public $anios_experiencia;
    function __construct($nombre,$apellido,$anios_experiencia)
    {
        parent::__construct($nombre,$apellido);
        $this->anios_experiencia=$anios_experiencia;
        
    }

    function getAniosExperiencia()
    {
        return $this->anios_experiencia;
    }

    function info()
    {
        parent::info();
        //echo "<h2>$this->anio_experiencia</h2>";
        
    }
    function IMC()
    {}
}

?>