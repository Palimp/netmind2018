<?php

//Saludo
echo "hola que tal";

function calcularIVA(){
    $iva=.21;
    $precio=1000;
    return $precio*$iva;
}

// Funcion chachiPiruli
function chachiPiruli($name) {
    $chachi = 'Hola $name eres muy Chachi Piruli';
    
    return $chachi;
}
function doble($numero){
    return $numero*2;    
}

function triple($numero) {
    return $numero * 3;
}
