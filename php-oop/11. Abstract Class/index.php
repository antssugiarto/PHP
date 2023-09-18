<?php

// Abstract class = class yang tidak dapat di instansiasi dan minimal harus memiliki 1 method abstrak

abstract class Product
{
    private
        $name,
        $image,
        $price;

    public function __construct($name = "Name", $image = "Image", $price = "Price")
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }

    abstract public function getDataProduct();
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

    public function getDataProduct()
    {
        $data = "Coffee : " . $this->getData() . ", {$this->volume} ml";
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

    public function getDataProduct()
    {
        $data = "Snack : " . $this->getData() . ", {$this->total} pcs";
        return $data;
    }
}

class PrintProduct
{
    public $productList = [];

    public function addProduct(Product $product)
    {
        $this->productList[] = $product;
    }

    public function print()
    {
        $string = "Daftar Produk : <br>";

        foreach ($this->productList as $p) {
            $string .= "- {$p->getDataProduct()} <br>";
        }
        return $string;
    }
}

$americano = new Coffee("Americano", "Americano.jpg", 15000, 250);
$croissant = new Snack("Croissant", "Croissant.jpg", 30000, 3);

$printProduct = new PrintProduct;
$printProduct->addProduct($americano);
$printProduct->addProduct($croissant);
echo $printProduct->print();
