<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 13:21
 */

namespace Crafter\EventBasket\Product;


class Discount implements DiscountInterface
{
    private $discount;

    public function __construct(int $discount)
    {
        $this->discount = $discount;
    }

    public function calculate(int $price): int
    {
        return $price - $this->discount;
    }

}