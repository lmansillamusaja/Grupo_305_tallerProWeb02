<?php
class Producto
{
    private $ProductID;
    private $ProductName;
    private $SupplierID;
    private $CategoryID;
    private $QuantityPerUnit;
    private $UnitPrice;

    public function __construct(
        int $ProductID,string $ProductName,int $SupplierID,int $CategoryID,int $QuantityPerUnit,int $UnitPrice ) 
        
    {
        $this->ProductID       = $ProductID;
        $this->ProductName     = $ProductName;
        $this->SupplierID      = $SupplierID;
        $this->CategoryID      = $CategoryID;
        $this->QuantityPerUnit = $QuantityPerUnit;
        $this->UnitPrice       = $UnitPrice;
    }

 // Getters
    public function getProductID()       { return $this->ProductID; }
    public function getProductName()     { return $this->ProductName; }
    public function getSupplierID()      { return $this->SupplierID; }
    public function getCategoryID()      { return $this->CategoryID; }
    public function getQuantityPerUnit() { return $this->QuantityPerUnit; }
    public function getUnitPrice()       { return $this->UnitPrice; }

    // Setters
    public function setProductID($value)       { $this->ProductID = $value; }
    public function setProductName($value)     { $this->ProductName = $value; }
    public function setSupplierID($value)      { $this->SupplierID = $value; }
    public function setCategoryID($value)      { $this->CategoryID = $value; }
    public function setQuantityPerUnit($value) { $this->QuantityPerUnit = $value; }
    public function setUnitPrice($value)       { $this->UnitPrice = $value; }


}
?>