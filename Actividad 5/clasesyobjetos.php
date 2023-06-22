<?php

//Clase
class Jugador{

    //Propiedades de la clase
    public $nombre;
    public $posicion;
    public $numero;

    //Constructor de la clase
    public function __construct($nombre, $posicion, $numero){
        $this->nombre = $nombre;
        $this->posicion = $posicion;
        $this->numero = $numero;
    }

    //Metodos de la clase
    public function calentar(){
        echo "El jugador $this->nombre esta calentando\n";
    }

    public function jugar(){
        echo "El jugador $this->nombre esta listo para entrar a la cancha\n";
    }
}


//Instancias de clase
$jugador1 = new Jugador("Brayan", "Defensa", 14);

// $jugador1->nombre = "Brayan Hernandez";
// $jugador1->posicion = "Defensa";
// $jugador1->numero = 14;

var_dump($jugador1);

//Llamada de metodos de la clase 
$jugador1->calentar();
$jugador1->jugar();