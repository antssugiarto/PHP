<?php

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
