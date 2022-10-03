<?php
// requirements
require_once __DIR__ . '/./user.php';
// cutomer class child of user
class Customer extends User {
    private $credit_card;

    public function __construct($name, $email, $password, $credit_card = null){
        parent::__construct($name, $email, $password);
        $this->credit_card = $credit_card;
    }
    public function getCreditCard(){
        return $this->credit_card;
    }
}
?>