<?php

require_once "App/init.php";

$americano = new Coffee("Americano", "Americano.jpg", 15000, 250);
$croissant = new Snack("Croissant", "Croissant.jpg", 30000, 3);

$printProduct = new PrintProduct;
$printProduct->addProduct($americano);
$printProduct->addProduct($croissant);
echo $printProduct->print();
