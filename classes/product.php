<?php 

class Product {

    protected $name;
    protected $brand;
    protected $price;


    // SET & GET NAME
    public function setName($value) {
        $this->name = $value;
    }

    public function getName() {
        return $this->name;
    }


    // SET & GET BRAND
    public function setBrand($value) {
        $this->brand = $value;
    }

    public function getBrand() {
        return $this->brand;
    }


    // SET & GET BRAND
    public function setPrice($value) {
        $this->price = $value;
    }

    public function getPrice() {
        return $this->price;
    }
}