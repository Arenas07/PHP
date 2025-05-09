<?php


// Una estructura switch case funciona de la siguiente manera:

$age = 18;

// Un switch case es lo mismo que poner un "if == x" ya que compara que la condicion sea igual al caso a poner

// Se le pasa una condicion para analizar
switch($age){
    case 1: // Los cases simbolizan las condiciones que se tienen que cumplir (if $age == 1)
        echo "Tiene un año";
        break;
    case 18: // Esta condicion es que se ejecutará (if $age == 18)
        echo "Tiene 18";
        break;
    default: // Default significa que ninguna condición se cumplió (else)
        echo "Ninguna de las anteirores";
        break;

        // Es necesario poner un break al final de cada case ya que se los demas cases estarian heredando la condicion que ya se habia cumplido
}


$meses = 3;

switch($meses){
    case 12:    // Dejar la condicion vacia es lo mismo a ignorar cada break
    case 1:
    case 2:
        echo "Es invierno";
        break;
    case 3: // La condicion se cumple aquí, y al no haber un break esa condicion se hereda
    case 4: // Hereda condicion
    case 5: // Hereda condicion
        echo "Es primavera";
        break;  // Hasta que rompe su ciclo
    case 6:
    case 7:
    case 8:
        echo "Es verano";
        break;
    case 9:
    case 10:
    case 11:
        echo "Es otoño";
        break;
    default:
        echo "Dato invalido";
}

