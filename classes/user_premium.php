<?php


require_once (__DIR__ . "/user.php");

class UserPremium extends User {

    protected $extraDiscount;


    function __construct($id ,$name , $surname, $email , $extraDiscount)
    {
        parent::__construct($id ,$name , $surname, $email);
        
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->extraDiscount=$extraDiscount;
    }


    //SET & GET extradiscount
    protected function setExtraDiscount($value){
      
        $this->extraDiscount = $value;
    }
  
    protected function getExtraDiscount() {

        return $this->extraDiscount;
    }
}

