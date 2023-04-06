<?php

class Cart
{
    private array $products;
    private float $allPrice = 0;

    function addProduct(Product $product)
    {
        $this->products[] = $product;
        $this->allPrice += $product->price;
    }
    function removeProduct(Product $product)
    {
        $key = array_search($product, $this->products, true);
        if ($key !== false) {
            unset($this->products[$key]);
            $this->allPrice -= $product->price;
        }
    }
}
