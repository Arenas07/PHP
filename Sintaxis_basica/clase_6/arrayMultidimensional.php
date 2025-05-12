<?php

$cervezas = [
    [
        "name" => "Corona",
        "alcohol" => 8.5,
        "country" => "Colombia"
    ],
    [
        "name" => "Budweiser",
        "alcohol" => 5.0,
        "country" => "USA"
    ],
    [
        "name" => "Heineken",
        "alcohol" => 5.0,
        "country" => "Netherlands"
    ]
];

// ****************************
// Acceso directo a un valor
// ****************************
echo $cervezas[1]["name"] . "<br>"; // Muestra: Budweiser


// ****************************
// Mostrar todo el contenido con print_r()
// ****************************
foreach($cervezas as $cerveza){
    echo "<pre>";               // <pre> da formato legible en HTML
    print_r($cerveza);          // Muestra el arreglo asociativo de una cerveza
    echo "</pre><br>";          // Salto de línea extra
}

// ****************************
// Recorrer con foreach anidado
// ****************************
foreach($cervezas as $cerveza){
    foreach($cerveza as $key => $valor){
        echo $key . " : " . $valor . "<br>"; // Muestra: name : Corona, alcohol : 8.5, etc.
    }
    echo "<br>"; // Espacio entre cada cerveza
}
