<?php
require_once __DIR__ . '/./properties.php';
class SaleProperties extends Properties{
    public $sale_price;

    public function __construct($type, $address, $sale_price){
        parent::__construct($type, $address);

        $this->sale_price = $sale_price;
    }
}
?> 