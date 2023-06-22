<?php

//Clase padre

use Jugador as GlobalJugador;

class SeleccionFutbol{
    public $id;
    public $nombre;
    public $edad;

    public function __construct($id, $nombre, $edad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function concentrarse(){
        echo "$this->nombre esta en concentracion";
    }

    public function viajar(){
        echo "$this->nombre esta viajando";
    }
}

//Clase hija
class Jugador extends SeleccionFutbol{

    //Propiedades de la clase
    public $posicion;
    public $numero;

    //Constructor de la clase
    public function __construct($id, $nombre, $edad, $posicion, $numero){
        parent::__construct($id, $nombre, $edad);//HEreda los atrubutos de la clase padre
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

class Entrenandor extends SeleccionFutbol{
    public $experiencia;

    public function __construct($id, $nombre, $edad, $experiencia)
    {
        parent::__construct($id, $nombre, $edad);
        $this->experiencia = $experiencia;
    }

    public function dirigirEntrenamiento(){
        echo "$this->nombre esta dirigiendo el entrenamiento";
    }

    public function dirigirPartido(){
        echo "$this->nombre esta dirigiendo el partido";
    }

}


$seleccion1 = new SeleccionFutbol(1, "Mexico", 120);
$jugador1 = new Jugador(1, "Hernandez", 22, "Defensa", 14);
$entrenador1 = new Entrenandor(1, "Lozano", 37, 8);


