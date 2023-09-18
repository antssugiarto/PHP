<?php

// Inheritance = Menciptakan hierarki antar kelas

class Product
{
    public
        $name,
        $image,
        $price,
        $volume,
        $total;

    public function __construct($name = "Name", $image = "Image", $price = "Price", $volume = "Volume", $total = "Total")
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->volume = $volume;
        $this->total - $total;
    }

    public function getData()
    {
        return "$this->name, $this->image, $this->price";
    }
};

class Coffee extends Product
{
    public function getInfoProduct()
    {
        $data = "Coffee : {$this->getData()}, {$this->volume} ml";
        return $data;
    }
};

class Snack extends Product
{
    public function getInfoProduct()
    {
        $data = "Snack : {$this->getData()}, {$this->total} pcs";
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

$americano = new Coffee("Americano", "Americano.jpg", 15000, 250, 0);
$croissant = new Product("Croissant", "Croissant.jpg", 30000, 0, 3);

echo $americano->getInfoProduct();
