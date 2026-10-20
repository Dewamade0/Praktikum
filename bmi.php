<?php

$berat = 61;
$tinggi = 176;
$tinggiMeter = $tinggi / 100;
$bmi = $berat /($tinggiMeter * $tinggiMeter);

if ($bmi < 18.5){
    echo "Berat badan anda adalah " . number_format($bmi, 1, ',','.') . " Anda kurus";
} elseif ($bmi < 24.9){
    echo "Berat badan anda adalah " . number_format($bmi, 1, ',','.') . " Anda normal";
} elseif ($bmi < 29.5){
    echo "Berat badan anda adalah " . number_format($bmi, 1, ',','.') . " Anda gemuk";
} elseif ($bmi >= 30){
    echo "Berat badan anda adalah " . number_format($bmi, 1, ',','.') . " Anda obesitas"; 
}   