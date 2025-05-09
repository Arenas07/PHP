<?php


// En PHP existen funciones predefinidas que realizan tareas comunes
// Estas funciones son parte de la biblioteca estándar de PHP y están disponibles para su uso sin necesidad de definirlas previamente
// Algunas de las funciones predefinidas más comunes son


// https://www.php.net/manual/es/indexes.functions.php


// Funciones para texto:
echo strlen("Hola Mundo"); // 10
echo strpos("Hola Mundo", "Mundo"); // 5
echo substr("Hola Mundo", 0, 4); // "Hola"
echo str_replace("Mundo", "PHP", "Hola Mundo"); // "Hola PHP"
echo trim("  Hola Mundo  "); // "Hola Mundo"

// Funciones numericas:
echo abs(-5); // 5
echo round(3.14159, 2); // 3.14
echo rand(1, 100); // Número aleatorio entre 1 y 100
echo ceil(3.2); // 4
echo floor(3.7); // 3

//  Funciones de fecha y hora:

echo date("Y-m-d H:i:s"); // 2025-05-09 12:30:45
echo strtotime("2025-05-09"); // Timestamp correspondiente a esa fecha
echo time(); // Devuelve el timestamp actual
echo mktime(0, 0, 0, 5, 9, 2025); // 2025-05-09 00:00:00


// Funciones de arrays:

$arr = [1, 2, 3];
echo count($arr); // 3

$arr = [1, 2, 3];
array_push($arr, 4);
print_r($arr); // [1, 2, 3, 4]

$arr = [1, 2, 3];
array_pop($arr);
print_r($arr); // [1, 2]

$arr = [1, 2, 3];
echo in_array(2, $arr); // true

$arr1 = [1, 2];
$arr2 = [3, 4];
print_r(array_merge($arr1, $arr2)); // [1, 2, 3, 4]


// Funciones de archivo

fopen($filename, $mode); // Abre un archivo y devuelve un puntero al mismo


$file = fopen("archivo.txt", "w"); // Abre el archivo "archivo.txt" en modo escritura (w)


fwrite($file, "Hola Mundo"); // Escribe "Hola Mundo" en el archivo


fclose($file); //  Cierra el archivo


file_get_contents($filename); // Lee el contenido de un archivo y lo devuelve como una cadena

$content = file_get_contents("archivo.txt"); // Lee el contenido del archivo y lo almacena en la variable $content



echo file_exists("archivo.txt"); // Verifica si el archivo existe

