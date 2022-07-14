<?php

require_once __DIR__ . "/Product.php";

class AnimalProduct extends Product {
    private $animalCategory;

    function __construct($_name, $_description, $_price, $_brand, $_rating, $_animalCategory) {
        parent::__construct($_name, $_description, $_price, $_brand, $_rating);
        $this->setAnimalCategory($_animalCategory);
    }

    // $animalCategory setter e getter
    public function setAnimalCategory($_animalCategory) {
        $this->animalCategory = $_animalCategory;
        return $this;
    }

    public function getAnimalCategory() {
        return $this->animalCategory;
    }
}

?>