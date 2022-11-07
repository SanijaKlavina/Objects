<?php
class Product {
    public $name;
    public $amount;
    public $startPrice;

    public function __construct($name, $startPrice, $amount){
        $this->name = $name;
        $this->amount = $amount;
        $this->startPrice = $startPrice;
    }
    public function printProduct(){
        echo $this->name. ", price ". $this->amount. ", amount". $this->startPrice. "\n";
    }


}
$product = new Product("Banana", 1.1, 13);
$product->printProduct();