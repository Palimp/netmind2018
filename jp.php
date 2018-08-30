<?php

//Saludo
echo "hola que tal";

function calcularIVA(){
    $iva=.21;
    $precio=1000;
    return $precio*$iva;
}
function doble($numero){
    return $numero*2;    
}