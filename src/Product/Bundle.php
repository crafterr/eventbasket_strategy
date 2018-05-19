<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 12:13
 */

namespace Crafter\EventBasket\Product;


class Bundle extends \ArrayObject implements ProductInterface
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name, array $products)
    {

        parent::__construct($products);
        $this->name = $name;

    }


    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {

        $sum = 0;
        foreach ($this as $item) {
            $sum = $sum+$item->getPrice();
        }
        return $sum;


    }

}