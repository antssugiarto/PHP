<?php

class Product {
    private $name, $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getData() {
        return "{$this->name}, {$this->price}";
    }
}

class Coffee extends Product {
    public $volume;

    public function __construct($name, $price, $volume) {
        parent::__construct($name, $price);
        $this->volume = $volume;
    }

    public function getData() {
        return parent::getData(). ", {$this->volume}";
    }
}

class Snack extends Product {
    public $pcs;

    public function __construct($name, $price, $pcs) {
        parent::__construct($name, $price);
        $this->pcs = $pcs;
    }

    public function getData() {
        return parent::getData(). ", {$this->pcs}";
    }
}

class PrintProduct {
    public function print(Product $product) {
        $data = $product->getData();
        return $data;
    }
}

$americano = new Coffee("Americano", "15000", "300 mL");
$crossaint = new Snack("Crossaint", "30000", "1 pcs");

$productInfo = new PrintProduct;

echo $americano->getData();
echo "<br>";
echo $crossaint->getData();

