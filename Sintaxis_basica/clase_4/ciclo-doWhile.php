<?php


$i = 10;
// El ciclo do-while es similar al ciclo while, pero garantiza que el bloque de código se ejecute al menos una vez, incluso si la condición es falsa
do{ 
    echo "entró $i <br>";
    $i++;
} while(i < 10); // La condición se evalúa después de ejecutar el bloque de código
// En este caso, el bloque de código se ejecutará una vez, incluso si $i es mayor que 10
// El ciclo do-while es útil cuando necesitas asegurarte de que el bloque de código se ejecute al menos una vez, independientemente de la condición
