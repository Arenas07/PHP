<?php

$beer = new stdClass();

$beer->name = "ASDACCV";

$beer->alcohol = 10;

print_r($beer). "<br>";

$arr = (array) $beer;

echo $arr["name"];

$arrLocation = [
    "address" => "Calle 100",
    "country" => "Congo",
];

$objLocation = (object) $arrLocation;

echo $objLocation->address;