<?php

class Product {
    private $name;
    private $description;
    private $price;
    private $brand;
    private $rating;

    function __construct($_name,$_description, $_price, $_brand, $_rating) {
        $this->setName($_name);
        $this->setDescription($_description);
        $this->setPrice($_price);
        $this->setBrand($_brand);
        $this->setRating($_rating);
    }

    // $name setter e getter
    public function setName($_name) {
        $this->name = $_name;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    // $description setter e getter
    public function setDescription($_description) {
        $this->description = $_description;
        return $this;
    }

    public function getDescription() {
        return $this->description;
    }

    // $price setter e getter
    public function setPrice($_price) {
        $this->price = $_price;
        return $this;
    }

    public function getPrice() {
        return $this->price;
    }

    // $brand setter e getter
    public function setBrand($_brand) {
        $this->brand = $_brand;
        return $this;
    }

    public function getBrand() {
        return $this->brand;
    }

    // $rating setter e getter
    public function setRating($_rating) {
        $this->rating = $_rating;
        return $this;
    }

    public function getRating() {
        return $this->rating;
    }
}

?>