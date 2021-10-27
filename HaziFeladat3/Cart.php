<?php


class Cart
{
    private array $items = [];
    
    function getItems(): array {
        return $this->items;
    }
    
    function setItems(array $items): void {
        $this->items = $items;
    }

    public function addProduct(Product $product, int $quantity): CartItem
    {
        if (in_array(Product::$product, $this->items)){
            Product::$product.increaseQuantity();
        }
        else{
            $this->items.add(Product::$product);
        }
    }

    public function removeProduct(Product $product)
    {
        if (in_array(Product::$product, $this->items)){
            $this->items.remove(Product::$product);
        }
    }

    public function getTotalQuantity(): int
    {
        $all = 0;
        for($i=0; $i<= $this->items.count(); $i++){
            $x = $this->items[$i].CartItem::$quantity;
            $all = $all + $x;
        }
    }

    public function getTotalSum(): float
    {
        $sum = 0;
        for($i=0; $i<= $this->items.count(); $i++){
            $y = $this->items[$i].Product::$price * $this->items[$i].CartItem::$quantity;
            $sum = $sum + $y;
        }
    }
}