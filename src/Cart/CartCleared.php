<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 20:37
 */

namespace Crafter\EventBasket\Cart;


class CartCleared extends Event
{

    /**
     * @var string
     */
    private $cartId;

    /**
     * CartCleared constructor.
     * @param string $cartId
     */
    public function __construct($cartId)
    {
        $this->cartId = $cartId;
    }

    /**
     * @return string
     */
    public function getCartId(): string
    {
        return $this->cartId;
    }




}