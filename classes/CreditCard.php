<?php

require_once __DIR__ . "/../traits/Validator.php";
class CreditCard {
    use Validator;

    private static $creditCardInstances = [];

    public static $MASTERCARD = "Mastercard";
    public static $VISA = "Visa";
    public static $AMERICAN_EXPRESS= "American Express";

    private string $type;
    private int $number;
    private string $expirationDate;

    function __construct($_type, $_number, $_expirationDate) {
        $this->setType($_type);
        $this->setNumber($_number);
        $this->setExpirationDate($_expirationDate);
        CreditCard::$creditCardInstances[] = $this;
    }

    // $creditCardInstances getter
    public static function getCreditCardInstances() {
        return CreditCard::$creditCardInstances;
    }

    // $type getter e setter
    public function setType($_type) {
        $this->isValidString($_type);
        $this->type = $_type;
        return $this;
    }

    public function getType() {
        return $this->type;
    }

    // $number getter e setter
    public function setNumber($_number) {
        $this->isValidNumber($_number);
        $this->number = $_number;
        return $this;
    }

    public function getNumber() {
        return $this->number;
    }

    // $expirationDate getter e setter
    public function setExpirationDate($_expirationDate) {
        $this->isValidString($_expirationDate);
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