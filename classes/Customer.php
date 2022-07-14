<?php

require_once __DIR__ . "/Cart.php";
class Customer {
    private $name;
    private $surname;
    private $shippingAddress;
    private $isRegistered;
    public Cart $cart;

    function __construct($_name, $_surname, $_shippingAddress, $_isRegistered) {
        $this->setName($_name);
        $this->setSurname($_surname);
        $this->setShippingAddress($_shippingAddress);
        $this->setIsRegistered($_isRegistered);
        $this->cart = new Cart();
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

    // $isRegistered getter e setter
    public function setIsRegistered($_isRegistered) {
        $this->isRegistered = $_isRegistered;
        return $this;
    }

    public function getIsRegistered() {
        return $this->isRegistered;
    }
}

?>