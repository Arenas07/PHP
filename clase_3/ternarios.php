<?php

// Los ternarios son condicionales if de una linea, en donde se visualiza que se cumpla una condicion o no


$edad = 19;

// Guardamos el valor de una variable y la analizamos
$value = $edad > 18 ? "Mayor de edad" : "Menor de edad"; // Se utiliza la condicion, en este caso edad es mayor a 18
// El signo de pregunta inicia el if y los dos puntos funcionan como un else

echo $value;