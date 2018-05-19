<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 20:44
 */

namespace Crafter\EventBasket\Cart;


use Crafter\EventBasket\Product\ProductInterface;

class Cart
{
    /**
     * @var int
     */
    private $id;

    private $products = [];

    private $clearTimes = 0;

    private function __construct()
    {
    }

    public static function create()
    {
        $cart = new self();
        $cart->apply(new CartCreated(uniqid()));
        return $cart;
    }

    public static function reconstituteFromHistory(array $events)
    {
        $cart = new self();
        foreach ($events as $event)
        {
            $cart->apply($event);
        }
        return $cart;
    }

    public function addProduct(ProductInterface $product, int $quantity = 1)
    {
        $this->apply(
          new ProductAddedToCart(
              $this->id,
              $product,
              $quantity
          )
        );
    }

    public function clear()
    {
        $this->apply(
          new CartCleared($this->id)
        );
    }

    private function apply(Event $event)
    {
        switch (get_class($event)) {
            case CartCreated::class:
                $this->id = $event->getCartId();
                break;
            case CartCleared::class:
                $this->products = [];
                $this->clearTimes++;
                break;
            case ProductAddedToCart::class:
                $this->products[] = $event->getProduct();
                break;
        }
    }

}