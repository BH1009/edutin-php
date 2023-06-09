<?php

$nombre = "";
$compra = 0;
$descuento = 0;
$preciofinal = 0;


if($compra < 50){
    $descuento = 0.05;
}
else if($compra >= 50 or $compra < 100){
    $descuento = 0.10;
}
else if($compra >= 100 or $compra <= 250){
    $descuento = 0.15;
}
else if($compra >= 250 or $compra < 400){
    $descuento = 0.20;
}
else{
    $descuento = 0;
}

$preciofinal = $compra - ($compra * $descuento);

echo('Hola ' . $nombre . " el valor de tu compra es " . $compra . "$ y con descuento " . $preciofinal . "$");

//Hola Juan Pablo el valor de tu compra es 55$ y con descuento 49.5$
//Hola Kenia Ortiz el valor de tu compra es 129$ y con descuento 116.1$
//Hola Angie Andrade el valor de tu compra es 275$ y con descuento 247.5$
//Hola Eva Castro el valor de tu compra es 350$ y con descuento 315$
