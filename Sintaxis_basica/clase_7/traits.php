<?php

trait EmailSender{
    public function sendEmail(){
        echo "Se envia el email <br>";
    }
}

trait DB{
    public function save(){
        echo "Se guarda en la base de datos <br>";
    }
}

trait LOG {
    public function log(string $message, string $filename){
        if(!file_exists($filename)){
            file_put_contents($filename, "");
        }

        $current = file_get_contents($filename);
        $current .= date("Y-m-d H:i:s"). "-". $message."\n";
        file_put_contents($filename, $current);
    }
}
class Invoice{
    use EmailSender, DB, LOG;

    public function create(){
        echo "Se crea la factura <br>";
        $this->log("Se creo la factura", "log.txt");
    }
}

$invoice = new Invoice();
$invoice->sendEmail();
$invoice->save();
$invoice->create();