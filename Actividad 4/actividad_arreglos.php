<?php

$rutina = array(
    "Lunes" => "Pecho, Espalda, Hombros",
    "Martes" => "Piernas, Gluetos",
    "Miercoles" => "Biceps, Espalda, Hombros",
    "Jueves" => "Triceps, Biceps",
    "Viernes" => "Piernas, Pantorrillas"
);

foreach($rutina as $dia => $ejercicios){
    echo  "El dia $dia toca:  $ejercicios \n";
}

/*
Lunes : Pecho, Espalda, Hombros 
Martes : Piernas, Gluetos 
Miercoles : Biceps, Espalda, Hombros 
Jueves : Triceps, Biceps 
Viernes : Piernas, Pantorrillas 
*/