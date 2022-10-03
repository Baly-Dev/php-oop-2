<?php
// requirements
require_once __DIR__ . '/../address.php';
// user class
class User{
    public $name;
    public $email;
    public $username;
    public $phone_number;
    protected $password;

    use Address;

    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}
?>