<?php

$i = 0;
// El ciclo while es un bucle que se ejecuta mientras una condición sea verdadera
// La sintaxis básica de un ciclo while es la siguiente
while(i < 10){ // Inicializa la variable $i en 0
    echo $i;
    $i++;
}

$contador = 1;

// El bucle while se ejecutará mientras $contador sea menor o igual a 5
while ($contador <= 5) {
    echo "Número: " . $contador . "<br>"; // Imprime el número
    $contador++; // Incrementa $contador en 1 en cada iteración
}