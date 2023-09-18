<?php

// Inheritance = Menciptakan hierarki antar kelas

class Product
{
    public
        $name,
        $image,
        $price;

    public function __construct($name = "Name", $image = "Image", $price = "Price")
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }

    public function getData()
    {
        return "$this->name, $this->image, $this->price";
    }
};

class Coffee extends Product
{
    public $volume;

    public function __construct($name = "Name", $image = "Image", $price = "Price", $volume = "Volume")
    {
        parent::__construct($name, $image, $price);
        $this->volume = $volume;
    }

    public function getData()
    {
        $data = "Coffee : " . parent::getData() . ", {$this->volume} ml";
        return $data;
    }
};

class Snack extends Product
{
    public $total;

    public function __construct($name = "Name", $image = "Image", $price = "Price", $total = "Total")
    {
        parent::__construct($name, $image, $price);
        $this->total = $total;
    }

    public function getData()
    {
        $data = "Snack : " . parent::getData() . ", {$this->total} pcs";
        return $data;
    }
}

class PrintProduct
{
    public function print(Product $product)
    {
        $data = $product->getData();
        return $data;
    }
}

$americano = new Coffee("Americano", "Americano.jpg", 15000, 250);
$croissant = new Snack("Croissant", "Croissant.jpg", 30000, 3);

echo $americano->getData();
echo "<br>";
echo $croissant->getData();
