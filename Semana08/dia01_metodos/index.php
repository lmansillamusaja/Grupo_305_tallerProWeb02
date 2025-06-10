<?php

include "./persona.php";




$persona = new Persona(nombre:"Luis",apellido:"Mansilla",edad:0);
$persona->nombre="laura";
var_dump($persona);
echo "<h4>$persona->nombre</h4>";
echo "<h4>$persona->apellido</h4>";
echo "<h4>$persona->edad</h4>";


$persona->saludar();
$rango=$persona->rangoEdad("30");
echo "<h1> tu eres: ($rango)</h1>";

echo "<br>";
echo "<br>";


$persona2 = new Persona(nombre:"Leandro",apellido:"Zeballos",edad:30);
var_dump($persona2);




/*
$persona->setNombre("Luiss");
$persona->setApellido("Apellido");
$persona->setEdad(29);

$nombre = $persona->getNombre();
$apellido = $persona->getApellido();
$edad = $persona->getEdad();
*/

//var_dump($persona);

/*
echo "<span style=\"border:1px solid black; color:red;\" > el nombres es : $nombre </span>";
echo "<span style=\"background-color:green  \"> el apellido es : $apellido </span>";
echo "<span style=\"border:1px solid black\"> la edad es : $edad </span>";
//echo " hola como estas  \"prueba\"  ";
*/


?>