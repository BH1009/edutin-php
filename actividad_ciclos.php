<?php
$numero = 7;
$factorial = 1;

for($i = $numero; $i > 0; $i--){
    $factorial *= $i;    
}

// for($x = 1; $x <= $numero; $x++){
//     $factorial *= $x;
// }

echo("El factorial de el numero $numero es $factorial");

/*
El factorial de el numero 5 es 120
El factorial de el numero 10 es 3628800
El factorial de el numero 15 es 1307674368000
El factorial de el numero 20 es 2432902008176640000
*/