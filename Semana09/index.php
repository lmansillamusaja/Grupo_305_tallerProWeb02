<?php

include "./persona.php";




$persona = new Persona(nombre:"Luis",apellido:"Mansilla",edad:0);

//$persona->nombre="fernando";

$persona->setNombre("fernando");
$resultado= $persona->getNombre();


echo "<h1> $resultado  </h2>"

?>