<?php

class Product {
    private $productName;
    private $categoryName;
    private $quantity;
    private $price;


    // Constructors
    public function __construct($productName, $categoryName, $quantity, $price){
        $this->productName = $productName;
        $this->categoryName = $categoryName;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    /**
     * Get the value of product_name
     */ 
    public function getProductName() {
        return $this->productName;
    }

    /**
     * Get the value of category_name
     */ 
    public function getCategoryName() {
        return $this->categoryName;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice() {
        return $this->price;
    }
}
?>