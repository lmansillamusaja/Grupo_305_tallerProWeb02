<?php

class Persona {
    private $nombre;
    private $apellido;
    private $edad;
    
    function __construct($nombre,$apellido,$edad){
        $this->nombre=$nombre;
        $this->apellido =$apellido;
        $this->edad =$edad;
    }

public function setNombre($nombre){
    $this->nombre=$nombre;

}

public function getNombre($nombre){
    $this->nombre=$nombre;

}

public function getApellido(){
    return $this->apellido;
}


public function getEdad(){
    return $this->edad;
}


}

class Docente extends Persona{

    public $course;

    public function __construct($nombre,$apellido,$edad,$course)
    {
        parent::__construct($nombre,$apellido,$edad);
        $this->course=$course;
        
    }

    public function dictar_course() 
    {
        echo "Dicta " . $this->course;
        
    }
}


?>