<?php

$namaBarang = "Minyak";
$harga = 54000;
$jumlah = 1;

$total = $harga * $jumlah;

echo "Nama barang: ". $namaBarang . "<br>";
echo "Harga barang: Rp. " . number_format($harga, 0, ',', '.') . "<br>";
echo "Jumlah barang: ". $jumlah . "<br>";
echo "Total belanja: Rp. " . number_format($total, 0, ',', '.') . "<br>";