
<?php

// Por favor leer el readme antes de empezar








// Para iniciar un documento de PHP, donde el navegador pueda leer todo lo que hagamos necesitamos la iniciación
// del programa poniendolo de la siguiente manera: <?php

// La declaracion de variables se puede hacer de 2 maneras

$a = 1;
$_a = 1;

// Misma cosa

echo $a . "<br>" . "<br>"; //El punto se usa para concatenar, en este caso php soporta los comandos de html

// Al abrir en un localhost tiene que aparecer "1" en el documento



/**************************************************************************** */
/**************************************************************************** */




$nombre = "Santiago" ;

// Como toda variable su dato interno puede cambiar con el tiempo

echo "<h1>$nombre</h1>"; // Imprime en el documento "Santiago", se puede poner cualquier tipo de  estilo aunque es mala practica hacerlo directamente en php 

$nombre = "Sebastian";

echo $nombre . "<br>" . "<br>"; // Ahora imprime "Sebastian"




//********************************************* ******************************/
//********************************************* ******************************/





// PHP es un lenguaje de tipado debil, lo que significa que permite cambios al tipo de dato que la variable recibe

$dato = "String"; 

echo $dato; 

$dato = true; // Los tipos de dato booleanos se representan usualmente con numeros, 1 significando true y 0 significando false

echo $dato . "<br>" . "<br>"; // Si el dato fuese "false" al imprimir no retornaria ningun dato, dejando la cadena como " String "

// Al imprimir en el documento tiene que aparecer " String1 "





//********************************************************************************** */
//********************************************************************************** */





$edad = 20;
$nombre = "Luis";

echo "Mi nombre es $nombre y tengo $edad años" . "<br>" . "<br>";

// Se pueden concatenar cadenas simplemente llamando a la variable dentro del texto
