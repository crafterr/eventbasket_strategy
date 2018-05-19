<?php
namespace Crafter\EventBasket\Product;
interface DiscountInterface
{

    public function calculate(int $price);
}