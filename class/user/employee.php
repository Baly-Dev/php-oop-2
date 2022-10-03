<?php
require_once __DIR__ . '/./user.php';
// employee class child of user
class Employee extends User{
    private $wallet;

    public function __construct($name, $email, $password, $wallet = null){
        parent::__construct($name, $email, $password);
        $this->wallet = $wallet;
    }

    public function getWallet(){
        return $this->wallet;
    }
}
?>