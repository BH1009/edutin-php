<?php

function check_vote($name, $age){
    echo($age >= 18 ? $name . " puedes votar\n" : $name . " no puedes votar\n");
}

check_vote("Ashley", 14);
check_vote("Luis Camilo", 20);
check_vote("Fernando", 16);
check_vote("Jorge", 22);

/*
Ashley no puedes votar
Luis Camilo puedes votar
Fernando no puedes votar
Jorge puedes votar

*/