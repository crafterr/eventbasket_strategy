<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 13:23
 */

namespace Crafter\EventBasket\Product;


class DiscountProduct implements ProductInterface
{
    /**
     * @var ProductInterface
     */
    private $product;

    /**
     * @var DiscountInterface
     */
    private $discount;

    public function __construct(ProductInterface $product, DiscountInterface $discount)
    {
        $this->product = $product;
        $this->discount = $discount;
    }

    public function getName()
    {
        return $this->product->getName();
    }

    public function getPrice()
    {
        return $this->discount->calculate($this->product->getPrice());
    }

}