<?php

require_once __DIR__ . "/../traits/Cart.php";
require_once __DIR__ . "/../traits/Validator.php";
require_once __DIR__ . "/CreditCard.php";
class Customer {
    use Cart, Validator;

    private string $name;
    private string $surname;
    private string $shippingAddress;
    private bool $isRegistered;
    public CreditCard $creditCard;

    function __construct($_name, $_surname, $_shippingAddress, $_isRegistered, $_cardType, $_cardNumber, $_cardExpirationDate) {
        $this->setName($_name);
        $this->setSurname($_surname);
        $this->setShippingAddress($_shippingAddress);
        $this->setIsRegistered($_isRegistered);
        $this->creditCard = new CreditCard($_cardType, $_cardNumber, $_cardExpirationDate);
    }
    
    // $name getter e setter
    public function setName($_name) {
        $this->isValidString($_name);
        $this->name = $_name;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    // $surname getter e setter
    public function setSurname($_surname) {
        $this->isValidString($_surname);
        $this->surname = $_surname;
        return $this;
    }

    public function getSurname() {
        return $this->surname;
    }

    // $shippingAddress getter e setter
    public function setShippingAddress($_shippingAddress) {
        $this->isValidString($_shippingAddress);
        $this->shippingAddress = $_shippingAddress;
        return $this;
    }

    public function getShippingAddress() {
        return $this->shippingAddress;
    }

    // $isRegistered getter e setter
    public function setIsRegistered($_isRegistered) {
        $this->isValidBool($_isRegistered);
        $this->isRegistered = $_isRegistered;
        return $this;
    }

    public function getIsRegistered() {
        return $this->isRegistered;
    }
}

?>