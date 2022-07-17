<?php

trait Cart{
    private array $productsList = [];

    // Funzione che aggiunge un prodotto al carrello
    public function addItemToCart(Product $product) {
        $this->productsList[] = $product;
    }

    // Funzione che rimuove un prodotto dal carrello
    public function removeItemFromCart(Product $product) {
        $this->productsList[] = $product;
    }

    // Funzione che restituisce $productsList
    public function getCartItems() {
        return $this->productsList;
    }

    // Funzione che restituisce il prezzo totale dei prodotti nel carrello
    public function getCartTotal() {
        $total = 0;
        foreach ($this->productsList as $product) {
            $total += $product->getPrice();
        }
        return $this->isRegistered ? $total * 0.8 : $total;
    }
}

?>