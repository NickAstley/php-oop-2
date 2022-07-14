<?php

class CreditCard {
    private int $number;
    private string $expirationDate;

    function __construct($_number, $_expirationDate) {
        $this->setNumber($_number);
        $this->setExpirationDate($_expirationDate);
    }

    // $number getter e setter
    public function setNumber($_number) {
        $this->number = $_number;
        return $this;
    }

    public function getNumber() {
        return $this->number;
    }

    // $expirationDate getter e setter
    public function setExpirationDate($_expirationDate) {
        $this->expirationDate = $_expirationDate;
        return $this;
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    // Funzione che controlla se la carta è scaduta
    public function isExpired() {
        $now = date("Y-m-d");
        if(strtotime($this->expirationDate) > strtotime($now)) {
            return false;
        }
        return true;
    }
}

?>