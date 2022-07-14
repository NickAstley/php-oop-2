<?php

class Cart{
    private $productsList = [];

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
        $utenteRegistrato = Customer->getIsRegistered();
        
        $total = 0;
        foreach ($this->productsList as $product) {
            $total += $product->getPrice();
        }
        return $utenteRegistrato ? $total * 0.8 : $total;
    }
}

?>