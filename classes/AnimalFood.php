<?php

require_once __DIR__ . "/AnimalProduct.php";

class AnimalFood extends AnimalProduct {
    private array $ingredients;
    private float $weightKg;

    function __construct($_name,$_description, $_price, $_brand, $_rating, $_animalCategory, $_ingredients, $_weightKg) {
        parent::__construct($_name, $_description, $_price, $_brand, $_rating, $_animalCategory);
        $this->setIngredients($_ingredients);
        $this->setWeightKg($_weightKg);
    }

    // $ingredients setter e getter
    public function setIngredients($_ingredients) {
        $this->ingredients = $_ingredients;
        return $this;
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    // $weightKg setter e getter
    public function setWeightKg($_weightKg) {
        $this->weightKg = $_weightKg;
        return $this;
    }

    public function getWeightKg() {
        return $this->weightKg;
    }
}

?>