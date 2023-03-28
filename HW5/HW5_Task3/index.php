<?php

require_once 'Product.php';
require_once 'Cart.php';

$product = new Product("Набор мышь + клаиатура", 300);
$product->addComponent(new Product("Мышка", 200));
$product->addComponent(new Product("Клавиатура", 300));

$cart = new Cart;
$cart->addProduct($product);

$product2 = new Product("Мышка", 200);
$product3 = new Product("Клавиатура", 400);

$cart->addProduct($product2);
$cart->addProduct($product3);

var_dump($cart);

$cart->removeProduct($product3);

var_dump($cart);
