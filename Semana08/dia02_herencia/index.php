<?php

include "./Persona.php";
include "./Docente.php";
include "./Administrador.php";

$persona = new Persona("luis","mansilla");
$persona->setNombre("jorgue");
$nombre =$persona->getNombre();
$apellido =$persona->getApellido();

echo "<h1> $nombre </h1>";
echo "<h1> $apellido </h1>";

//$persona->info();


$docente = new Docente("fernando","Garcia","docente");

$cargo= $docente->getCargo();


echo "<span> $cargo</span>";
$docente->info();

$administrador = new Administrador("fernando","Garcia",10);

$anios_exp= $administrador->getAniosExperiencia();


echo "<span> $anios_exp</span>";
$administrador->info();




?>