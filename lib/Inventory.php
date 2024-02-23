<?php
namespace InventoryManagement\InventoryClass;

class Inventory{
    private $products;

    public function __construct(){
        $this->products = array();
    }

    public function getProducts() {

        return $this->products;
    }

    public function addProductToInventory(object $obj){
        $this->products[$obj->getId()] = $obj;
    }

    public function RemoveProductFromInventory(int $id){
        unset($this->products[$id]);
    }

    public function UpdateQuantityOfProduct(int $id, int $newQuantity){
        $product = $this->products[$id];
        $product->setQuantity($newQuantity);
    }

    public function totalValueOfInventory(){
        $total = 0;

        foreach($this->products as $product){
            $total =+ $product->getPrice();
        }

        return $total;
    }
}













?>