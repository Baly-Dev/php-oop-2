<?php
// requirements
require_once __DIR__ . '/./properties.php';
// rent proprieties child of proprieties
class RentProperties extends Properties{
    public $rent_charge;

    public function __construct($type, $address, $rent_charge){
        parent::__construct($type, $address);

        $this->rent_charge = $rent_charge;
    }

    public function getFormatRent(){
        return format_number($this->rent_charge, 2);
    }
}
?>