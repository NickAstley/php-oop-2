<?php

require_once __DIR__ . "/classes/Customer.php";
require_once __DIR__ . "/classes/AnimalBedding.php";
require_once __DIR__ . "/classes/AnimalFood.php";

// Utente con carta valida
$andrea1 = new Customer("Andrea", "Nicastro", "Via dei Casini 60/A, Prato", false, 5468888577478, "2022/08/11");
// Stessi dati ma carta scaduta
$andrea2 = new Customer("Andrea", "Nicastro", "Via dei Casini 60/A, Prato", false, 5468888577478, "2022/06/11");
// Utente 1 ma con lo sconto attivo perché registrato
$andrea3 = new Customer("Andrea", "Nicastro", "Via dei Casini 60/A, Prato", true, 5468888577478, "2022/08/11");
// Genero un prodotto AnimalFood
$ciboGatto = new AnimalFood("Royal Canin V-Diet", "Crocchette per supporto nutrizionale per gatti con disturbi alle vie urinarie", 64.90, "Royal Canin", 5, "Cat", ["riso", "glutine di grano", "mais"], 9);
// genero un prodotto AnimalBedding
$cucciaGatto = new AnimalBedding("Sacco Autoriscaldante Scottish", "Il sacco è costituito da un materiale autoriscaldante", 16.70, "Croci", 3, "Cat", "Red and black", 1, 1);
// Aggiungo i prodotti al carrello del primo
$andrea1->cart->addItem($ciboGatto);
$andrea1->cart->addItem($cucciaGatto);
// Aggiungo i prodotti al carrello del terzo
$andrea3->cart->addItem($ciboGatto);
$andrea3->cart->addItem($cucciaGatto);
// Mostro il totale del primo
echo "Totale carrello: " . $andrea1->cart->getTotal();
echo "<br>";
// Mostro il totale del terzo
echo "Totale carrello: " . $andrea3->cart->getTotal();
echo "<br>";
// Mostro la validità della carta del primo
echo $andrea1->creditCard->isExpired() ? "Carta scaduta" : "Carta valida";
echo "<br>";
// Mostro la validità della carta del secondo
echo $andrea2->creditCard->isExpired() ? "Carta scaduta" : "Carta valida";
?>