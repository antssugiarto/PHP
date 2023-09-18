<?php
// Class = Template untuk membuat instance/objek (class mendefinisikan objek). Class menyimpan data (property) dan perilaku (method)
// ! Pembuatan class diawali dengan keyword (class [NamaKelas]) dan aturan penamaan class sama dengan aturan penamaan variabel

class Product
{
};

// Object = Instance/objek yang didefinisikan class. Instance/objek dapat dibuat dengan 1 class
// ! Pembuatan objek diawanli dengan keyword (new)

$coffee = new Product;
$snack = new Product;

var_dump($coffee);
var_dump($snack);
