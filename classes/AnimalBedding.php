<?php

require_once __DIR__ . "/AnimalProduct.php";

class AnimalBedding extends AnimalProduct {
    private string $colour;
    private float $widthMeters;
    private float $lengthMeters;

    function __construct($_name,$_description, $_price, $_brand, $_rating, $_animalCategory, $_colour, $_widthMeters, $_lengthMeters) {
        parent::__construct($_name, $_description, $_price, $_brand, $_rating, $_animalCategory);
        $this->setColour($_colour);
        $this->setWidthMeters($_widthMeters);
        $this->setLengthMeters($_lengthMeters);
    }

    // $colour setter e getter
    public function setColour($_colour) {
        $this->isValidString($_colour);
        $this->colour = $_colour;
        return $this;
    }

    public function getColour() {
        return $this->colour;
    }

    // $widthMeters setter e getter
    public function setWidthMeters($_widthMeters) {
        $this->isValidNumber($_widthMeters);
        $this->widthMeters = $_widthMeters;
        return $this;
    }

    public function getWidthMeters() {
        return $this->widthMeters;
    }

    // $lengthMeters setter e getter
    public function setLengthMeters($_lengthMeters) {
        $this->isValidNumber($_lengthMeters);
        $this->lengthMeters = $_lengthMeters;
        return $this;
    }

    public function getLengthMeters() {
        return $this->lengthMeters;
    }
}

?>