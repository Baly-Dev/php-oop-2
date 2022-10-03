<?php
// requirements
require_once __DIR__ . '/../address.php';
// propreities class
class Properties{
    public $type;
    public $surface;
    use Address;

    public function __construct($type, $address){
        $this->type = $type;
        $this->address = $address;
    }
}
?>