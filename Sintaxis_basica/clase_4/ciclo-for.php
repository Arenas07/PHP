<?php


// El ciclo for es un bucle que se utiliza para iterar sobre un bloque de código un número específico de veces

// La sintaxis básica de un ciclo for es la siguiente:
// for (inicialización; condición; incremento) {
//     // Código a ejecutar en cada iteración
// }
//
// Ejemplo de un ciclo for que imprime los números del 0 al 9
for($i = 0; $i < 10; $i++){
    if($i % 2 == 0){ // Si el número es par
        continue; // EL continue pasa a la siguiente iteracion, lo que significa que no se ejecuta el resto del código dentro del bucle para esa iteración
    }
    echo $i . "<br>"; // Imprime el número impar
}