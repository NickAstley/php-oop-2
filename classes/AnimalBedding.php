<?php

require_once __DIR__ . "/AnimalProduct.php";

class AnimalBedding extends AnimalProduct {
    private $colour;
    private $width;
    private $length;

    function __construct($_name,$_description, $_price, $_brand, $_rating, $_animalCategory, $_colour, $_width, $_length) {
        parent::__construct($_name, $_description, $_price, $_brand, $_rating, $_animalCategory);
        $this->setColour($_colour);
        $this->setWidth($_width);
        $this->setLength($_length);
    }

    // $colour setter e getter
    public function setColour($_colour) {
        $this->colour = $_colour;
        return $this;
    }

    public function getColour() {
        return $this->colour;
    }

    // $width setter e getter
    public function setWidth($_width) {
        $this->width = $_width;
        return $this;
    }

    public function getWidth() {
        return $this->width;
    }

    // $length setter e getter
    public function setLength($_length) {
        $this->length = $_length;
        return $this;
    }

    public function getLength() {
        return $this->length;
    }
}

?>