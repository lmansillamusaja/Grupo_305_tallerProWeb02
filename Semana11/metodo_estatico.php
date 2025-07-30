<?php

class Geometria
{
    private static $lado;
    private static $base;

    function __construct($lado,$base)
    {
       self::$lado=$lado;
       self::$base=$base;
    }
    static function setBase($base)
    {
         self::$base=$base;
    }
    function getBase() 
    {
        return $this->base;        
    }
    static function setLado($lado)
    {
        self::$lado=$lado;
    }
    function getLado() 
    {
        return $this->lado;        
    }

    static function mostrarValores()
    {
      echo "<h1>  el lado es  :" . self::$lado . " </h1>";
      echo "<h1>  la base es : , la base" . self::$base . "</h1>";
    
    }

    static function mostrarDatos()
    {
        echo "<h1>  datos de la clase </h1>";
    }
}

//$geometria = new Geometria(30,40);
//$geometria->setBase(500);
//$geometria->mostrarValores();

//Geometria::mostrarDatos();
Geometria::setBase(400);
Geometria::setBase(400);
Geometria::setLado(500);
Geometria::mostrarValores();






?>