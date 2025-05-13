<?php

declare(strict_types=1); // Habilita el modo estricto de tipos: los tipos deben coincidir exactamente

// **********************************************
// DEFINICIÓN DE LA CLASE Venta
// **********************************************

class Venta {
    
    public float $total;       // Total de la venta
    private string $fecha;      // Fecha de la venta
    public array $conceptos;   // Arreglo de objetos Concept (productos/servicios)

    public static int $count = 0;  // Contador de ventas creadas

    public function __construct(float $total, string $fecha){
        $this->total = $total;
        $this->fecha = $fecha;
        $this->conceptos = [];         // Inicializamos como arreglo vacío
        self::$count++;                // Incrementamos el contador estático
    }

    public function agregarConcepto(Concept $concepto) {
        $this->conceptos[] = $concepto; // Agregamos al arreglo de conceptos
    }

    public function crearFactura(): string {
        return "Factura creada con éxito.<br>";
    }

    public static function reset()  {
        self::$count = 0; // Reinicia el contador de instancias
    }

    public function __destruct(){
        echo "El objeto ha sido destruido.<br>";
    }

    public function getDate(): string {
        return $this->fecha; // Devuelve la fecha de la venta
    }

    public function setDate(string $fecha){
        if(strlen($fecha) !== 10){
            echo "La fecha no es válida.<br>";
            return;
        }
        
        $this->fecha = $fecha; // Establece la fecha de la venta
    }
}


// **********************************************
// CLASE Concept: representa un ítem de la venta
// **********************************************

class Concept {
    public string $descripcion; // Ej. "Cerveza"
    public float $cantidad;     // Ej. 10 unidades

    public function __construct(string $descripcion, int|float $cantidad){
        $this->descripcion = $descripcion;
        $this->cantidad = $cantidad;
    }
}


class OnlineSale extends Venta {
    public $paymentMethod; // Ej. "Tarjeta de crédito"
    public function __construct(float $total, string $fecha, string $paymentMethod){
        parent::__construct($total, $fecha); // Llama al constructor de la clase padre
        $this->paymentMethod = $paymentMethod; // Inicializa el método de pago
    }

    public function showInfo(): string{
        return "La venta tiene un monto de: $this->total";
    }
}





// **********************************************
// USO DE LAS CLASES
// **********************************************


$onlineSale = new OnlineSale(5, date("Y-m-d"), "tarjeta de crédito");
echo $onlineSale->crearFactura(); 
echo $onlineSale->showInfo() . "<br>";

// Creamos una nueva venta
$venta = new Venta(10.5, date("Y-m-d"));

$venta->setDate("2020-12-12");
echo $venta->getDate(); 

// Creamos un concepto y lo agregamos a la venta
$concepto = new Concept("Cerveza", 10);
$venta->agregarConcepto($concepto);

// **********************************************
// MOSTRAR RESULTADOS
// **********************************************

echo "<pre>";

// Mostramos mensaje de la factura
echo $venta->crearFactura();

// Mostramos el objeto completo
print_r($venta);

// Mostramos el contador actual de ventas
echo "Ventas creadas: " . Venta::$count . "<br>";

// Reiniciamos el contador
Venta::reset();
echo "Contador reiniciado: " . Venta::$count . "<br>";

// Mostramos el arreglo de conceptos
print_r($venta->conceptos);

echo "</pre>";
