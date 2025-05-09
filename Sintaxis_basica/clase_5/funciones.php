<?php

// Las funciones son bloques de código reutilizables que realizan una tarea específica. Se definen una vez y se pueden llamar múltiples veces en el código.
// Las funciones pueden aceptar parámetros (valores de entrada) y devolver un valor (resultado).
saludo("Juan"); 
saludo("Pedro");
saludo("Maria");

// De esta manera se reutiliza el codigo, evitando repetir lo mismo en diferentes partes del programa

function saludo($nombre){
    echo "Hola $nombre <br>";
} // La función saludo() toma un parámetro $nombre y lo utiliza para imprimir un saludo personalizado.



/*****************************************************/ 



echo suma(5, 10) . "<br>"; 

echo SUMA(20, 30) . "<br>"; // PHP no es sensible a mayúsculas y minúsculas, por lo que la función suma() se puede llamar de cualquier manera
// La función suma() se puede llamar de cualquier manera, pero es recomendable seguir la convención de usar minúsculas para los nombres de las funciones
function suma($a, $b){
    $resultado = $a + $b;
    return $resultado;
}