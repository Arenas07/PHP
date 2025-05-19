<?php

class Discount{
    

    public function __construct($discount){
        $this->discount = $discount;
    }

    public function getDiscount($price){
        echo 'Se aplica el descuento <br>';
        return $price * $this->discount;
    }
}

class SpecialDiscount extends Discount{

    const SPECIAL__DISCOUNT = 2;

    public function getDiscount($price){
        echo 'Se aplica el descuento especial<br>';
        return $price * $this->discount * self::SPECIAL__DISCOUNT;
    }
}

$discount = new SpecialDiscount(0.1);
$discountProduct = $discount->getDiscount(100);
echo $discountProduct;