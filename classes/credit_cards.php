<?php 

class CreditCards {

    protected $cardNumber;
    protected $cardPin;

    public function __construct($cardNumber , $cardPin)
    {
        $this->cardNumber=$cardNumber;
        $this->cardPin=$cardPin;
    }


    // SET & GET CARDNUMBER
    protected function setCardNumber($value) {
        $this->cardNumber = $value;
    }

    protected function getCardNUmber() {
        return $this->cardNumber;
    }


    // SET & GET CARDPIN
    protected function setCardPin($value) {
        $this->cardPin = $value;
    }

    protected function getCardPin() {
        return $this->cardPin;
    }
}