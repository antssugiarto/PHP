<?php

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
}
