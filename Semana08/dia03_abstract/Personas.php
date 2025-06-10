<?php


 abstract class Personas{

    public $nombre;
    public $apellido;
    public $edad;
    public $peso;
    public $altura;   
      
    function __construct($nombre,$apellido,$edad,$peso,$altura)

    {
        $this->nombre=$nombre;        
        $this->apellido=$apellido;        
        $this->edad=$edad;
        $this->peso=$peso;
        $this->altura=$altura;


       
        
    }

    function mostrar()
    {
        var_dump($this);
    }

    function setNombre($nombre)
    {
        $this->nombre=$nombre;
    }

    function getNombre()
    {
        return $this->nombre;
    }
  
    function info()
    {
        echo "<h2> El usuario : 
        $this->nombre , 
        con apellido : 
        $this->apellido , 
        tiene la edad de : 
        $this->edad   </h2>";
    }

    abstract function IMC();
    



    
    

}





?>