<?php
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

class PrintProduct
{
    public function print(Product $product)
    {
        $data = $product->getData();
        return $data;
    }
}

$coffee = new Product("Americano", "Americano.jpg", 15000);
$snack = new Product("Croissant", "Croissant.jpg", 30000);

$productInfo = new PrintProduct();
echo $productInfo->print($snack);
