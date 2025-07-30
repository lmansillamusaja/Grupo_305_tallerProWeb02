<?php
include __DIR__ . '/../core/Conexion.php';
include __DIR__ . '/../models/Producto.php';

class ProductoControler {
    private $db;
    
    public function __construct() {
        $this->db = (new Conexion())->getConexion();
    }
    public function listarProductos() {

        $productos = [];

        $sql = "SELECT ProductID,ProductName,SupplierID,CategoryID,QuantityPerUnit,UnitPrice FROM products";
        $stmt = $this->db->query($sql);
        $stmt->execute();
      
        
        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $producto = new Producto(
                                    (int)    $fila['ProductID'],
                                    (string) $fila['ProductName'],
                                    (int)    $fila['SupplierID'],
                                    (int)    $fila['CategoryID'],
                                    (int)    $fila['QuantityPerUnit'],
                                    (double) $fila['UnitPrice']
                                    );

            $productos[] = $producto;
        }
            return $productos;
    }

    //actualizar
    public function actualizarProducto(Producto $producto) {
    $sql = "UPDATE products SET 
                ProductName = :nombre,
                SupplierID = :proveedor,
                CategoryID = :categoria,
                QuantityPerUnit = :cantidad,
                UnitPrice = :precio
            WHERE ProductID = :id";

    $stmt = $this->db->prepare($sql);

    $stmt->bindValue(':nombre', $producto->getProductName(), PDO::PARAM_STR);
    $stmt->bindValue(':proveedor', $producto->getSupplierID(), PDO::PARAM_INT);
    $stmt->bindValue(':categoria', $producto->getCategoryID(), PDO::PARAM_INT);
    $stmt->bindValue(':cantidad', $producto->getQuantityPerUnit(), PDO::PARAM_STR);
    $stmt->bindValue(':precio', $producto->getUnitPrice(), PDO::PARAM_STR);
    $stmt->bindValue(':id', $producto->getProductID(), PDO::PARAM_INT);

    return $stmt->execute(); // Devuelve true si se actualizó correctamente
}    
}

?>

