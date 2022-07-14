<?php

require_once __DIR__ . "/AnimalProduct.php";

class AnimalFood extends AnimalProduct {
    private $ingredients;
    private $weight;

    function __construct($_name,$_description, $_price, $_brand, $_rating, $_animalCategory, $_ingredients, $_weight) {
        parent::__construct($_name, $_description, $_price, $_brand, $_rating, $_animalCategory);
        $this->setIngredients($_ingredients);
        $this->setWeight($_weight);
    }

    // $ingredients setter e getter
    public function setIngredients($_ingredients) {
        $this->ingredients = $_ingredients;
        return $this;
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    // $weight setter e getter
    public function setWeight($_weight) {
        $this->weight = $_weight;
        return $this;
    }

    public function getWeight() {
        return $this->weight;
    }
}

?>