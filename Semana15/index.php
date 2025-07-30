<?php
$accion = $_GET['accion'] ?? 'listar';

echo $accion;

switch ($accion) {
    case 'listar':
        include __DIR__ . '/views/listarProductos.php';
        break;

    case 'editar':
        include __DIR__ . '/views/editarProducto.php';
        break;

    case 'actualizar':
        include __DIR__ . '/controllers/ProductoControler.php';
        

        $producto = new Producto(
            (int)$_POST['ProductID'],
            $_POST['ProductName'],
            (int)$_POST['SupplierID'],
            (int)$_POST['CategoryID'],
            $_POST['QuantityPerUnit'],
            (float)$_POST['UnitPrice']
        );

        $controlador = new ProductoControler();
        $controlador->actualizarProducto($producto);

        // Redirigir a lista después de actualizar
        header('Location: index.php?accion=listar');
    exit;

    default:
        echo "<h3>Acción no válida.</h3>";
        break;
}


?>