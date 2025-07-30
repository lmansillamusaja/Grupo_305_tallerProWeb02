<?php

$estudiante = [

    "nombre"=>"luis",
    "apellido"=>"Galvez",
    "edad"=>34
    //"curso"=>"ciencia de datos"
];

echo "<h3> <pre>";
var_dump($estudiante);
echo "</pre> </h3>";

echo "<h3>" . $estudiante["nombre"] .  "</h3>";
echo "<h3>" . $estudiante["apellido"] .  "</h3>";
echo "<h3>" . $estudiante["edad"] .  "</h3>";
//echo "<h3>" . $estudiante["curso"] .  "</h3>";
//actualizar un valor 

$estudiante["nombre"]="pepito";

echo "<h3> <pre>";
var_dump($estudiante);
echo "</pre> </h3>";


$estudiante["curso"]="ciencia de datos";


echo "<h3> <pre>";
var_dump($estudiante);
echo "</pre> </h3>";

unset($estudiante["edad"]);

echo "<h3> <pre>";
var_dump($estudiante);
echo "</pre> </h3>";


?>