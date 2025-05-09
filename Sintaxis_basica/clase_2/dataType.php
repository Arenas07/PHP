<?php

// Tipos de datos basicos

$numero = 1;

$decimal = 4.2;

$cadena = "Esto es una cadena";

$boolean = false;

$vacio = null;

// Para corroborar el tipo de dato se puede usar el comando gettype

echo gettype($numero)."<br>";

// Recordar que se puede cambiar el tipo de dato

$numero = "1";

echo gettype($numero)."<br>"; // Devuelve ahora un String al haber modificado el dato

$numero = int("1"); // Pero se puede forzar la conversion aunque el tipo de dato no sea el especificado

echo gettype($numero); //Devuelve un entero
