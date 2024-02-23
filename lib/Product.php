<?php
namespace InventoryManagement\ProductClass;

class Product{
    private $id; // int
    private $name; // string
    private $quantity; // int
    private $price; // float


    public function __construct(int $id, string $name, int $quantity, float $price){
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function setPrice(float $price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }
}













?>