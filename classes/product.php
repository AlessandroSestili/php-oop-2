<?php 

class Product {

    protected $name;
    protected $brand;
    protected $price;

    function __construct($name , $brand , $price)
    {
        $this->setName($name);
        $this->setBrand($brand);
        $this->setPrice($price);
    }


    // SET & GET NAME
    protected function setName($value) {
        $this->name = $value;
    }
    protected function getName() {
        return $this->name;
    }


    // SET & GET BRAND
    protected function setBrand($value) {
        $this->brand = $value;
    }
    protected function getBrand() {
        return $this->brand;
    }


    // SET & GET BRAND
    protected function setPrice($value) {
        // controllo che value sia un numero
        if(!is_int($value)) {
            throw new Exception("PREZZO NON VALIDO!");
        }

        $this->price = $value;
    }
    protected function getPrice() {
        return $this->price;
    }
}