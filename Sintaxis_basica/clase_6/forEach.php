<?php

// Arreglo indexado

$nombres = ["Viktor", "Juan", "Pedro"]; // Se crea un arreglo con índices automáticos (0, 1, 2)

// Recorrer el arreglo indexado con foreach
foreach($nombres as $name){ //se especifica la variable a recorrer y se le asigna un nombre
    echo $name . "<br>"; // Imprime cada nombre seguido de un salto de línea
}







// Arreglo asociativo

$cerveza = [
    "name" => "Corona",      // clave "name", valor "Corona"
    "alcohol" => 8.5,        // clave "alcohol", valor 8.5
    "country" => "Colombia"  // clave "country", valor "Colombia"
];

// Recorrer solo los valores del arreglo asociativo
foreach($cerveza as $valor){
    echo $valor . "<br>"; // Imprime cada valor: Corona, 8.5, Colombia
}

// Recorrer claves y valores del arreglo asociativo
foreach($cerveza as $key => $valor){
    echo $key . " : " . $valor . "<br>"; // Imprime: name : Corona, alcohol : 8.5, etc.
}
