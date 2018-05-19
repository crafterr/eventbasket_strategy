<?php
namespace Crafter\EventBasket\Product;

class Product implements ProductInterface
{
    private $name;

    private $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

}