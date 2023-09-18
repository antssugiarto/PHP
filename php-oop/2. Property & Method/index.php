<?php

// Property = Variabel di dalam objek
// ! Aturan penamaan property sama seperti variabel, tetapi di depan ditambah visibility

// Method = Fungsi di dalam objek
//  ! Aturan penamaan property sama seperti function, tetapi di depan ditambah visibility

class Product
{
    public
        $name,
        $image,
        $price;

    public function getData()
    {
        return "$this->name, $this->image, $this->price";
    }
};

$coffee = new Product;
$coffee->name = "Americano";
$coffee->image = "Americano.jpg";
$coffee->price = "IDR 15.000";

$snack = new Product;
$snack->name = "Croissant";
$snack->price = "IDR 30.000";
$snack->image = "Croissant.jpg";

echo "Coffee : " . $coffee->getData() . "<br>";
echo "Snack : " . $snack->getData();
