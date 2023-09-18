<?php

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
}
