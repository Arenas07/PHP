<?php

// ***************************
// Arreglo indexado de cervezas
// ***************************
$cervezas = [
    "Corona",
    "Budweiser",
    "Heineken",
];

// Otro arreglo separado de cervezas
$cervezas2 = [
    "Azucar manuelita",
    "Miller",
    "Stella",
];

// ***************************
// Unir dos arreglos
// ***************************

$cervezasMezcladas = array_merge($cervezas, $cervezas2); // Une ambos arreglos

// Mostrar el arreglo mezclado (array_merge no modifica los originales)

echo "<pre>";
print_r($cervezasMezcladas);
echo "</pre>";

// ***************************
// Agregar un nuevo elemento
// ***************************

array_push($cervezas, "Pilsner"); // Agrega "Pilsner" al final del arreglo $cervezas

// ***************************
// Eliminar el último elemento
// ***************************

$cerveza = array_pop($cervezas); // Elimina y devuelve el último elemento del arreglo

// ***************************
// Contar elementos del arreglo
// ***************************

echo count($cervezas) . "<br>"; // Muestra cuántos elementos tiene $cervezas después del pop

// ***************************
// Mostrar la cerveza eliminada
// ***************************

echo $cerveza . "<br>"; // Muestra: Pilsner

// ***************************
// Verificar si un valor está en el arreglo
// ***************************
if(in_array("Corona", $cervezas)) {
    echo "La cerveza Corona está en el arreglo.<br>";
} else {
    echo "La cerveza Corona no está en el arreglo.<br>";
}
