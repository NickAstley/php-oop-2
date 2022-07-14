<?php

class Customer {
    private $name;
    private $surname;
    private $shippingAddress;

    function __construct($_name, $_surname, $_shippingAddress) {
        $this->setName($_name);
        $this->setSurname($_surname);
        $this->setShippingAddress($_shippingAddress);
    }
    
    // $name getter e setter
    public function setName($_name) {
        $this->name = $_name;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    // $surname getter e setter
    public function setSurname($_surname) {
        $this->surname = $_surname;
        return $this;
    }

    public function getSurname() {
        return $this->surname;
    }

    // $shippingAddress getter e setter
    public function setShippingAddress($_shippingAddress) {
        $this->shippingAddress = $_shippingAddress;
        return $this;
    }

    public function getShippingAddress() {
        return $this->shippingAddress;
    }
}

?>