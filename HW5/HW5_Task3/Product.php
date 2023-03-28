<?php

class Product
{
    private string $title;
    public float $price;
    private array $components;

    function __construct(string $title, float $price = null)
    {
        $this->title = $title;
        $this->price = $price;
    }
    public function addComponent(Product $product)
    {
        $this->components[] = $product;
        $this->summComponents();
    }
    private function summComponents()
    {
        $summ = 0;
        foreach ($this->components as $component) {
            $summ += $component->price;
        }
        $this->price = $summ;
    }
}
