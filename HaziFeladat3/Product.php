<?php


class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;
    
    function __construct(int $id, string $title, float $price, int $availableQuantity) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }
    function getId(): int {
        return $this->id;
    }

    function getTitle(): string {
        return $this->title;
    }

    function getPrice(): float {
        return $this->price;
    }

    function getAvailableQuantity(): int {
        return $this->availableQuantity;
    }

    function setId(int $id): void {
        $this->id = $id;
    }

    function setTitle(string $title): void {
        $this->title = $title;
    }

    function setPrice(float $price): void {
        $this->price = $price;
    }

    function setAvailableQuantity(int $availableQuantity): void {
        $this->availableQuantity = $availableQuantity;
    }

    public function addToCart(Cart $cart, int $quantity): CartItem
    {
        if (in_array(Product::$product, Cart::$items)){
            Product::$product.increaseQuantity();
        }
        else{
            Cart::$items.add(Product::$product);
        }
    }

    public function removeFromCart(Cart $cart)
    {
        if (in_array(Product::$product, Cart::$items)){
            Cart::$items.remove(Product::$product);
        }
    }
}