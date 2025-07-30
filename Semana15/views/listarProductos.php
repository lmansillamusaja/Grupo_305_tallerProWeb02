<?php

include __DIR__ . '/../controllers/ProductoControler.php';
$productos = (new ProductoControler() )->listarProductos();
?>
<h2>Lista de Productos.</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Proveedor</th>
        <th>Category</th>
        <th>Cantidad Por Unidad</th>
        <th>Precio Unitario</th>
        <th>Acciones</th>
        
    </tr>
    <?php foreach ($productos as $p): ?>
    <tr>
        <td><?= $p->getProductID(); ?></td>
        <td><?= $p->getProductName(); ?></td>
        <td><?= $p->getSupplierID(); ?></td>
        <td><?= $p->getCategoryID(); ?></td>
        <td><?= $p->getQuantityPerUnit(); ?></td>
        <td><?= $p->getUnitPrice(); ?></td>
        <td>
             <a href="index.php?accion=editar&id=<?= $p->getProductID(); ?>">Editar</a>
        </td>
     
    </tr>
    <?php endforeach; ?>
</table>