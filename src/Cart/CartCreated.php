<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 20:38
 */

namespace Crafter\EventBasket\Cart;


class CartCreated extends Event
{
    /**
     * @var string
     */
    private $cartId;

    /**
     * CartCreated constructor.
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