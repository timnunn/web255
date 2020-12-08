<?php

class Order {
    public $item;
    public $quantity;
    public $price;
    public $tax;
    public $total_cost;

    public function __construct(string $item, int $quantity, int $price, int $tax, int $total_cost) {
        $this->item = $item;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->tax = $tax;
        $this->total_cost = $total_cost;
    }

    public function getItem(): string {
        return $this->item;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }
    
    public function getPrice(): int {
        return $this->price;
    }

    public function getTax(): int {
        return $this->tax;
    }

    public function getTotal_cost(): int {
        return $this->total_cost;
    }

}