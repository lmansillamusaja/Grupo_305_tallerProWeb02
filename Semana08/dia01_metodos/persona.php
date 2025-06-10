<?php
class Persona{
    //propiedades
    public $nombre;
    public $apellido;
    public $edad;
    
    //constructor
    function __construct($nombre,$apellido,$edad)
    {
        $this->nombre=$nombre;
        
        $this->apellido=$apellido;
        
        $this->edad=$edad;
    }
   
    function saludar()
    {
        echo "<p> hola $this->nombre $this->apellido, tu edad es : $this->edad anios</p>";
    }

    function rangoEdad($edad)
    {
        if($this->edad>=40)
        return "adulto";
        else
        return "menor";
    }

    function mostrar()
    {
        var_dump($this);
    }




    
}
?>