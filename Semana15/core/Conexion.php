<?php
//include __DIR__ . '/../../config/database.php';

include __DIR__ . '/../config/database.php';

class Conexion {
    private $conexion;

    public function __construct() {
        try {

            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $this->conexion = new PDO($dsn, DB_USER, DB_PASS);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexion exitosa";

        } catch (PDOException $e) {
            
            echo  $e->getMessage();
        
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function cerrar() {
        $this->conexion=null;
    }
}




?>