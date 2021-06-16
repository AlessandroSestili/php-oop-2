<?php 

class User {

    protected $id;
    protected $name;
    protected $surname;
    protected $email;
    //protected $credit_cards;

    // Creo construct pubblico
    public function __construct($id= NULL ,$name , $surname, $email)
    {
        $this->setID();
        $this->setName($name);
        $this->setSurname($surname);
        $this->setEmail($email);
        //$this->credit_cards= [];
    }


    //SET & GET ID
    protected function setID(){
        // Setto id tra 1 a 99 casuale
        $this->id = rand(1,99);
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

        // controllo che la mail sia valida ( con la @ inside)
        if (!strstr($value, "@")) {
            throw new Exception("EMAIL NON VALIDA!");
        }
        $this->email = $value;
    }
    protected function getEmail() {

        return $this->email;
    }


    // Creo funzione che stampa HTML 
    public function renderUser()
    {
        $render = "<h1>" . $this->name . $this->email . "</h1>";
        $render .= "<h2> l'ID dell utente é:" . $this->id . "</h2>";

        return $render;
    }
}





