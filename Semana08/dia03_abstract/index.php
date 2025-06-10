<?php

include "./Personas.php";
include "./Docente.php";

$persona = new Persona("luis","mansilla");



$persona->setNombre("jorgue");

$nombre =$persona->getNombre();
$apellido =$persona->getApellido();

echo "<h1> $nombre </h1>";
echo "<h1> $apellido </h1>";

/*//$persona->info();


$docente = new Docente("fernando","Garcia","docente");

$cargo= $docente->getCargo();


echo "<span> $cargo</span>";
$docente->info();
*/

?>