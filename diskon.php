<?php

$angka = 500000;

function diskon($hitung){
    if ($hitung >= 500000){
       $hitung = $hitung - ($hitung * 10/100); return "$hitung";
    } elseif ($hitung >= 200000){
       $hitung = $hitung - ($hitung * 10/100); return "$hitung";
    }else {return "$hitung";}
}
echo "Total belanja adalah: ". $angka . "<br>";
if ($angka >= 500000){
    echo "Total diskon 15% <br>";
} elseif ($angka >= 200000){
    echo "Total diskon 10%<br>";
} else {echo "Tidak ada diskon<br>";}
echo "Total harga setelah diskon: ". diskon($angka);