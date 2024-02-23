<?php
use InventoryManagement\ProductClass\Product;
use InventoryManagement\InventoryClass\Inventory;

require("./lib/Product.php");
require("./lib/Inventory.php");



$product_1 = new Product(1,"Nike", 10, 29);

echo "<pre>";
echo var_dump($product_1);
echo "</pre>";

$inventory = new Inventory();
$inventory->addProductToInventory($product_1);

echo "<pre>";
echo print_r($inventory->getProducts());
echo "</pre>";


echo "<pre>";
echo $inventory->totalValueOfInventory();;
echo "</pre>";


$inventory->UpdateQuantityOfProduct($product_1->getId(), 100);
echo "<pre>";
echo print_r($inventory->getProducts());
echo "</pre>";



$inventory->RemoveProductFromInventory($product_1->getId());
echo "<pre>";
echo print_r($inventory->getProducts());
echo "</pre>";




?>