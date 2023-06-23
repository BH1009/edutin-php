<?php

class Persona{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function imprimirDatos(){
        echo "$this->nombre edad $this->edad";
    }

}

class Ciudadano extends Persona{
    public $deposito;

    public function __construct($nombre, $edad, $deposito){
        parent::__construct($nombre, $edad);
        $this->deposito = $deposito;
    }

    public function imprimirDatos(){
        parent::imprimirDatos();
        echo " deposito $this->deposito \n";
    }

    public function pagarImpuesto(){
        if($this->deposito > 3000){
            echo "Debe pagar impuesto \n";
        }
        else{
            echo "No debe pagar impuesto \n";
        }
    }
}


$ciudadano1 = new Ciudadano("Mariano", 25, 5700);
$ciudadano1->imprimirDatos();
$ciudadano1->pagarImpuesto();
echo "\n";
$ciudadano2 = new Ciudadano("Leonel", 56, 3500);
$ciudadano2->imprimirDatos();
$ciudadano2->pagarImpuesto();
echo "\n";
$ciudadano3 = new Ciudadano("Yaneth", 34, 8400);
$ciudadano3->imprimirDatos();
$ciudadano3->pagarImpuesto();
echo "\n";
$ciudadano3 = new Ciudadano("Martin", 45, 2500);
$ciudadano3->imprimirDatos();
$ciudadano3->pagarImpuesto();


/*
Mariano edad 25 deposito 5700 
Debe pagar impuesto 

Leonel edad 56 deposito 3500 
Debe pagar impuesto 

Yaneth edad 34 deposito 8400 
Debe pagar impuesto 

Martin edad 45 deposito 2500 
No debe pagar impuesto 
*/