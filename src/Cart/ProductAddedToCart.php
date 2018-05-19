<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 20:35
 */

namespace Crafter\EventBasket\Cart;


use Crafter\EventBasket\Product\ProductInterface;

class ProductAddedToCart extends Event
{
    /**
     * @var string
     */
    private $cartId;

    /**
     * @var ProductInterface
     */
    private $product;

    /**
     * @var int
     */
    private $quantity;

    /**
     * ProductAddedToCart constructor.
     * @param string $cartId
     * @param ProductInterface $product
     * @param int $quantity
     */
    public function __construct(string $cartId, ProductInterface $product, int $quantity = 1)
    {
        $this->cartId = $cartId;
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getCartId(): string
    {
        return $this->cartId;
    }

    /**
     * @return ProductInterface
     */
    public function getProduct(): ProductInterface
    {
        return $this->product;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }




}