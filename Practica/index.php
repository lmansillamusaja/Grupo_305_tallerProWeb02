<?php
 include "./persona.php";

$persona = new persona("Esmeralda",  "Sanchez", 22);
$persona ->setNombre("carlos");
$resutado =$persona->getNombre();

echo "<h1>$resultado </h2>";

$docente = new Docente("Pedrito","Pedraza",56,"Matematica");
$docente->dictar_course();


?>