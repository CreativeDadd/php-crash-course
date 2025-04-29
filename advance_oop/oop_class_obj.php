<?php

class Product {

public $name = "soap";
public $price; //price in cent and $1 = 100 cent
//we would create a method
public function priceAsCurrency($currencySymbol = "$", $divsor = 100){
    $priceAsCurr = $this->price/$divsor;
    return $currencySymbol . $priceAsCurr;
}

}

//create the soap object:
$soapObj = new Product('soap', 500 );
$soapObj->price = 2000;

// let's call the nethod in the class:
$priceCurr =  $soapObj->priceAsCurrency('@', 200);
 var_dump($priceCurr);
