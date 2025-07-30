<?php

try{

$cn = new PDO("mysql:host=localhost;dbname=Northwind", "root", "");
$cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Consulta con parámetros posicionales (?)
$sql = "SELECT ProductID, ProductName, UnitPrice, CategoryID
FROM products
WHERE CategoryID = ? AND UnitPrice >= ?";
$stmt = $cn->prepare($sql);

$categoria = 1;
$precioMinimo = 20;

$stmt->execute([$categoria, $precioMinimo]);


echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>ID</th><th>Producto</th><th>Precio</th><th>Categoría</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                    <td>{$row['ProductID']}</td>
                    <td>{$row['ProductName']}</td>
                    <td>\${$row['UnitPrice']}</td>
                    <td>{$row['CategoryID']}</td>
        </tr>";

}
echo "</table>";

}
catch(Exception $e)
{
    throw new Error("Error en el sistema");
}


?>

