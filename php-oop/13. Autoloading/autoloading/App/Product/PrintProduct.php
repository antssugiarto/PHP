<?php

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
