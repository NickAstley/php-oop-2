<?php

require_once __DIR__ . "/classes/Customer.php";
require_once __DIR__ . "/classes/AnimalBedding.php";
require_once __DIR__ . "/classes/AnimalFood.php";

$andrea = new Customer("Andrea", "Nicastro", "Via dei Casini 60/A, Prato");
$ciboGatto = new AnimalFood("Royal Canin V-diet", "Crocchette per supporto nutrizionale per gatti con disturbi alle vie urinarie", 64.90, "Royal Canin", 5, "Cat", ["rice", "gluten", "mais"], "9kg");
$ciboGatto2 = new AnimalFood("Royal Canin V-diet", "Crocchette per supporto nutrizionale per gatti con disturbi alle vie urinarie", 64.90, "Royal Canin", 5, "Cat", ["rice", "gluten", "mais"], "9kg");
$andrea->cart->addItem($ciboGatto);
$andrea->cart->addItem($ciboGatto2);
var_dump($andrea->cart->getItems());
echo $andrea->cart->getTotal();

?>