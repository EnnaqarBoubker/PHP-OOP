<?php 

class Contact {
    public $name;
    public $phone;
    public $email;
    public $adress;


    public function __construct($name, $phone, $email, $adress){
        $this -> name = $name;
        $this -> phone = $phone;
        $this -> email = $email;
        $this -> adress = $adress;
    }

}