<?php
include __DIR__ . '/../controllers/ProductoControler.php';

$controlador = new ProductoControler();

$id = $_GET['id'] ?? null;
$producto = null;

// Buscar producto actual por ID
if ($id !== null) {
    $productos = $controlador->listarProductos();
    
    foreach ($productos as $p) {
        
        if ($p->getProductID() == $id) {
            $producto = $p;
            break;
        }
    }
}

if (!$producto) {
    echo "<p>Producto no encontrado.</p>";
    exit;
}
?>

<h2>Editar Producto</h2>
<form method="post" action="index.php?accion=actualizar">
    <input type="hidden" name="ProductID" value="<?= $producto->getProductID(); ?>">

    <label>Nombre:</label>
    <input type="text" name="ProductName" value="<?= $producto->getProductName(); ?>"><br>

    <label>Proveedor:</label>
    <input type="number" name="SupplierID" value="<?= $producto->getSupplierID(); ?>"><br>

    <label>Categoría:</label>
    <input type="number" name="CategoryID" value="<?= $producto->getCategoryID(); ?>"><br>

    <label>Cantidad por Unidad:</label>
    <input type="text" name="QuantityPerUnit" value="<?= $producto->getQuantityPerUnit(); ?>"><br>

    <label>Precio Unitario:</label>
    <input type="text" name="UnitPrice" value="<?= $producto->getUnitPrice(); ?>"><br>

    <input type="submit" value="Actualizar">
</form>