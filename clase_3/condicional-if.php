<?php

// La estructura de un if-else se compone de la siguiente manera

$edad = 18;


// Se revisa cada if hasta que la condicion sea true
if ($edad == 18) {
    echo "Eres mayor de edad";
} else if ($edad > 18 && $edad < 60){ // Los conectores que se pueden usar para validar los datos con && (and), || (or)
    echo "Eres un adulto";
} else{
    echo "Eres menor de edad";
}
