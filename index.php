<?php
require 'vendor/autoload.php';

use Crafter\EventBasket\Cart\Cart;
use Crafter\EventBasket\Cart\CartCleared;
use Crafter\EventBasket\Cart\ProductAddedToCart;
use Crafter\EventBasket\Product\Product;
use Crafter\EventBasket\Product\Gift;
use Crafter\EventBasket\Product\Bundle;
use Crafter\EventBasket\Product\DiscountProduct;
use Crafter\EventBasket\Product\Discount;

$mouse = new Product('Mouse',10);
$laptop = new Product('Laptop',10);
$monitor = new Product('Monitor',10);

$gift = new Gift($mouse);

$bundle = new Bundle('Zestawik',[$mouse,$laptop,$monitor]);



$discount = new Discount(10);

$case = new DiscountProduct(
    $mouse,
    $discount
);

$superDuperBundle = new Bundle(
    'Super duper',
    [
        new Bundle('Internal bundle 1', [$mouse]),
        new Bundle('Internal bundle 2', [$mouse, $laptop]),
        new Bundle('Internal bundle 3', [$mouse, $bundle]),
        new DiscountProduct(
            new Product('Case na laptopa', 10),
            new Discount(10)
        )
    ]
);


$cartId = '123';


$events = [
    new CartCleared($cartId),
    new ProductAddedToCart($cartId,$mouse),
    new ProductAddedToCart($cartId,$laptop),
    new CartCleared($cartId),
    new ProductAddedToCart($cartId, $monitor),
    new ProductAddedToCart($cartId, $monitor),
    new CartCleared($cartId)
];


$cart =  Cart::reconstituteFromHistory($events);

dump($cart);

?>