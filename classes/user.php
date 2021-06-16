<?php 

class User {

    protected $id;
    protected $name;
    protected $surname;
    protected $email;
    //protected $credit_cards;

    // Creo construct pubblico
    public function __construct($id ,$name , $surname, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        //$this->credit_cards= [];
    }


    //SET & GET ID
    protected function setID($value){
      
        $this->id = $value;
    }
  
    protected function getUserId() {

        return $this->id;
    }


    //SET & GET  NAME
    protected function setName($value) {

        $this->name = $value;
    }

    protected function getName() {

        return $this->name;
    }


    //SET & GET  SURNAME
    protected function setSurname($value) {

        $this->surname = $value;
    }

    protected function getSurname() {

        return $this->surname;
    }


    //SET & GET  EMAIL
    protected function setEmail($value) {

        $this->email = $value;
    }

    protected function getEmail() {

        return $this->email;
    }
}





