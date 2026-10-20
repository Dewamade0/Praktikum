<?php


$nomorHari = 1;

 $daftar_hari = match ($nomorHari){
    1 => 'Senin',
    2 => 'Selasa',
    3 => 'Rabu',
    4 => 'Kamis',
    5 => 'Jumat',
    6 => 'Sabtu',
    7 => 'Minggu',
    default => 'Error',
 };

   echo "Hari ini adalah hari: <b>" . $daftar_hari . "</b> <br>";

