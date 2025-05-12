<?php

// Creamos un arreglo asociativo llamado $cerveza con tres claves: name, alcohol y country
$cerveza = [
    "name" => "Corona",
    "alcohol" => 8.5,
    "country" => "Colombia"
];

// Esta línea intenta mostrar el arreglo completo, pero no funcionará correctamente
// porque no se puede imprimir directamente un arreglo con echo.
// Para mostrarlo, se debería usar print_r() o var_dump():
// echo $cerveza; Esto da error o no muestra nada útil

echo $cerveza."<br>";

// Solución:
print_r($cerveza)."<br>"; //  Muestra todo el contenido del arreglo

// Modificamos el valor de la clave "alcohol", ahora será 9
$cerveza["alcohol"] = 9;

// Mostramos el nuevo valor del índice "alcohol"
echo $cerveza["alcohol"]; //  Muestra: 9


