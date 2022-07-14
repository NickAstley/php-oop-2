<?php

class Cart{
    private array $productsList;
    private bool $isDiscountable;
    
    function __construct($_isDiscountable) {
        $this->productsList = [];
        $this->setIsDiscountable($_isDiscountable);
    }

    // $isDiscountable getter e setter
    public function setIsDiscountable($_isDiscountable) {
        $this->isDiscountable = $_isDiscountable;
        return $this;
    }

    public function getIsDiscountable() {
        return $this->isDiscountable;
    }

    // Funzione che aggiunge un prodotto al carrello
    public function addItem(Product $product) {
        $this->productsList[] = $product;
    }

    // Funzione che rimuove un prodotto dal carrello
    public function removeItem(Product $product) {
        $this->productsList[] = $product;
    }

    // Funzione che restituisce $productsList
    public function getItems() {
        return $this->productsList;
    }

    // Funzione che restituisce il prezzo totale dei prodotti nel carrello
    public function getTotal() {
        $total = 0;
        foreach ($this->productsList as $product) {
            $total += $product->getPrice();
        }
        return $this->isDiscountable ? $total * 0.8 : $total;
    }
}

?>