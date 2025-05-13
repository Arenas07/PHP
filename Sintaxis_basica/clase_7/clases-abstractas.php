<?php

// **********************************************
// CLASE ABSTRACTA Producto
// **********************************************

// Una clase abstracta NO puede instanciarse directamente.
// Sirve como "modelo base" que otras clases deben heredar.
// Obliga a las clases hijas a implementar ciertos métodos (los abstractos).
abstract class Producto {

    // Propiedades protegidas: accesibles solo dentro de esta clase y sus hijas
    protected string $precio;  // Precio base del producto
    protected string $nombre;  // Nombre del producto

    // Método abstracto: debe ser implementado por todas las clases hijas
    abstract public function calcularPrecio(): float;

    // Método público que retorna el nombre del producto
    public function getNombre(): string {
        return $this->nombre;
    }
}


// **********************************************
// CLASE Beer: hereda de Producto
// **********************************************

class Beer extends Producto {

    // Constante de clase: no cambia y se accede con self::IMPUESTO
    const IMPUESTO = 1.1; // 10% de impuesto

    // Constructor: inicializa el nombre y el precio del producto
    public function __construct($nombre, $precio) {
        $this->nombre = $nombre; // Asigna el nombre al atributo protegido
        $this->precio = $precio; // Asigna el precio al atributo protegido
    }

    // Implementación obligatoria del método abstracto calcularPrecio
    public function calcularPrecio(): float {
        // Aplica el impuesto al precio base y retorna el total
        return $this->precio * self::IMPUESTO;
    }
}


// **********************************************
// CREACIÓN DE UN OBJETO BEER Y USO DE POLIMORFISMO
// **********************************************

// Creamos un objeto de tipo Beer (nombre: "Cerveza", precio: 100)
$beer = new Beer("Cerveza", 100);

// Función que recibe un objeto del tipo Producto (o sus hijos) y muestra su precio
function mostrarPrecio(Producto $producto) {
    // Usamos los métodos definidos en Producto y calculamos el precio total
    echo "El precio de {$producto->getNombre()} es: {$producto->calcularPrecio()}<br>";
}

// Llamamos la función con el objeto creado
mostrarPrecio($beer); // Resultado: "El precio de Cerveza es: 110"

// Creamos otro objeto Beer con diferente nombre y precio
$beer = new Beer("Cerveza2", 200);

// Volvemos a mostrar su precio con la misma función
mostrarPrecio($beer); // Resultado: "El precio de Cerveza2 es: 220"
