<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 12:03
 */

namespace Crafter\EventBasket\Product;


class Gift implements ProductInterface
{
    /**
     * @var ProductInterface
     */
    private $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    public function getName()
    {
        return 'Gift - '.$this->product->getName();
    }

    public function getPrice()
    {
        return 0;
    }


}