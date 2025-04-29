<?php

class Product {
    public $productName;
    public $price;

    //create the magic function:
    public function __construct($productName, $price){
        $this->productName = $productName;
        $this->price = $price; //price in U.S. cent

    }

    //create a price method on the product:
    public function priceAsCurrency($divisor = 100, $currencySymbol = '$'){
        //since price was in cent, we had to divide by 100 to make it USD in this simple arithmtic:
        $prd_price_Curr = $this->price/$divisor;
        return  $currencySymbol.$prd_price_Curr;
    }
    
}

$productObj1 = new Product('soap', 650);
$prd_name = $productObj1->productName;
$prd_price = $productObj1->priceAsCurrency( 100, '$');

echo $prd_name;
echo "<br>";
echo $prd_price;
echo "<br>";
echo "The price of {$prd_name} in our superstore is {$prd_price}";
