<?php

// Definimos una interfaz llamada 'SendInterface'.
// Las interfaces en programación orientada a objetos sirven como contratos que las clases deben seguir.
// En otras palabras, cualquier clase que implemente esta interfaz debe tener el método 'send' que se describe aquí.
interface SendInterface {
    // El método 'send' es parte del contrato de la interfaz.
    // Cualquier clase que implemente 'SendInterface' debe definir este método, que recibe un parámetro de tipo string ($message).
    public function send(string $message);
}

// Definimos otra interfaz llamada 'SaveInterface'.
// Similar a 'SendInterface', esta interfaz actúa como un contrato que garantiza que cualquier clase que la implemente tendrá el método 'save'.
interface SaveInterface {
    // El método 'save' es parte del contrato de la interfaz.
    // Cualquier clase que implemente 'SaveInterface' debe tener una implementación del método 'save' sin parámetros.
    public function save();
}

// Clase 'Document' implementa tanto 'SendInterface' como 'SaveInterface'.
// Al implementar estas interfaces, la clase 'Document' se compromete a definir los métodos 'send' y 'save'.
// Esto asegura que las clases que implementan interfaces tienen una estructura definida y uniforme.
class Document implements SendInterface, SaveInterface {
    
    // Implementación del método 'send' de la interfaz 'SendInterface'.
    // Aquí, la clase 'Document' define cómo debe comportarse el método 'send'.
    // En este caso, simplemente muestra un mensaje que indica que se envía la venta.
    public function send(string $message) {
        echo "Se envia la venta";
    }

    // Implementación del método 'save' de la interfaz 'SaveInterface'.
    // Aquí, la clase 'Document' define cómo debe comportarse el método 'save'.
    // En este caso, muestra un mensaje que indica que se guarda la venta.
    public function save() {
        echo "Se guarda la venta";
    }
}

// Clase 'BeerRepository' implementa solo 'SaveInterface'.
// Esto significa que esta clase debe tener una implementación del método 'save', pero no es necesario que implemente el método 'send'.
// Es útil cuando necesitas que ciertas clases tengan un conjunto específico de funcionalidades sin sobrecargar con métodos innecesarios.
class BeerRepository implements SaveInterface {
    
    // Implementación del método 'save' de la interfaz 'SaveInterface'.
    // En este caso, se muestra un mensaje que indica que la venta se guarda en la base de datos.
    public function save() {
        echo "Se guarda la venta en la db";
    }
}

// Clase 'SaveProcess' es responsable de gestionar el proceso de guardado de datos.
// Recibe un objeto que implementa 'SaveInterface', lo que garantiza que ese objeto tendrá el método 'save' que puede invocar.
class SaveProcess {
    
    // Propiedad privada '$saveManager' de tipo 'SaveInterface'.
    // Esto asegura que cualquier objeto asignado a '$saveManager' tendrá un método 'save'.
    // Este es un ejemplo de **desacoplamiento**, ya que la clase 'SaveProcess' no necesita saber detalles sobre la implementación de 'save' en 'Document' o 'BeerRepository'.
    private SaveInterface $saveManager;

    // El constructor de 'SaveProcess' recibe un objeto que implementa 'SaveInterface'.
    // Este objeto se asigna a '$saveManager' y garantiza que la clase 'SaveProcess' pueda interactuar con él de manera uniforme.
    public function __construct(SaveInterface $saveManager) {
        $this->saveManager = $saveManager;
    }

    // Método 'keep' que realiza un proceso adicional antes de guardar.
    // Llama al método 'save' del objeto '$saveManager', sin preocuparse de qué clase concreta lo implementa.
    public function keep() {
        // Se imprime un mensaje antes de realizar el guardado.
        echo "hacemos algo antes <br>";

        // Aquí se llama al método 'save' del objeto '$saveManager'.
        // Como '$saveManager' implementa 'SaveInterface', sabemos que tiene un método 'save', pero no importa cómo lo implementa.
        $this->saveManager->save();
    }
}

// Creamos una instancia de 'BeerRepository', que implementa 'SaveInterface'.
// Como 'BeerRepository' tiene el método 'save', podemos usarlo en cualquier parte que requiera un 'SaveInterface'.
$beerRepository = new BeerRepository();

// Creamos una instancia de 'Document', que también implementa 'SaveInterface' y 'SendInterface'.
// Al implementar 'SaveInterface', 'Document' tiene que proporcionar su propia implementación del método 'save'.
// Además, tiene el método 'send' que es parte de 'SendInterface', pero no lo estamos utilizando aquí.
$document = new Document();

// Creamos una instancia de 'SaveProcess', pasando un objeto que implementa 'SaveInterface' (en este caso, 'Document').
// 'SaveProcess' puede trabajar con cualquier clase que implemente 'SaveInterface', por lo que podríamos pasarle tanto 'Document' como 'BeerRepository'.
$saveProcess = new SaveProcess($document);

// Llamamos al método 'keep' de 'SaveProcess', que invoca el método 'save' del objeto '$document'.
// Esto muestra cómo 'SaveProcess' no necesita saber cómo funciona el método 'save' de 'Document', solo que debe existir.
$saveProcess->keep();  // Aquí se ejecuta correctamente el 'save' de 'Document'

?>
