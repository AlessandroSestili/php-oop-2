<?php


require_once (__DIR__ . "/user.php");

class UserPremium extends User {

    protected $extraDiscount;


    function __construct($id ,$name , $surname, $email , $extraDiscount)
    {
        parent::__construct($id ,$name , $surname, $email);
        
        $this->setID();
        $this->setName($name);
        $this->setSurname($surname);
        $this->setEmail($email);
        $this->setExtraDiscount($extraDiscount);
    }


    //SET & GET extradiscount
    protected function setExtraDiscount($value){
      
        $this->extraDiscount = $value;
    }
    protected function getExtraDiscount() {

        return $this->extraDiscount;
    }
}

