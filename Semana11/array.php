<?php

$array_frutas = ["manzana","pera","uva","platano"];

echo "<h3> <pre>";
var_dump($array_frutas);
echo "</pre> </h3>";

$array_frutas[]="mango";

echo "<h3> <pre>";
var_dump($array_frutas);
echo "</pre> </h3>";

$array_frutas[2]="naranja";

echo "<h3> <pre>";
var_dump($array_frutas);
echo "</pre> </h3>";


unset($array_frutas[2]);

echo "<h3> <pre>";
var_dump($array_frutas);
echo "</pre> </h3>";

$array_frutas_r=array_values($array_frutas);

echo "<h3> <pre>";
var_dump($array_frutas_r);
echo "</pre> </h3>";

?>