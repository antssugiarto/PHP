<?php

// Abstract class = class yang tidak dapat di instansiasi dan minimal harus memiliki 1 method abstrak
// Interface = kelas abstrak yang sama sekali tidak memiliki implementasi dan tidak memiliki property. method pada interface harus memiliki
//             visibility public. nantinya, kelas implemntasi boleh mengimplementasi banyak interface

interface DataProduct
{
    public function getDataProduct();
}

abstract class Product
{
    protected
        $name,
        $image,
        $price;

    public function __construct($name = "Name", $image = "Image", $price = "Price")
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }

    public function setName($name)
    {
        if (!is_string($name)) {
            throw new Exception("Must be String");
        }
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract public function getData();
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
        return "$this->name, $this->image, $this->price";
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

    public function getData()
    {
        return "$this->name, $this->image, $this->price";
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
