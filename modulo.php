<?php

$angka = 21;

function modulo($mod){
    if($mod % 2 == 0) {return "Genap";}
    else {return"Ganjil";}
} 

echo "Angka ". $angka . " adalah angka " . modulo($angka);