<?php

//hitung diskon pakaian

$pakaian = [
    'baju' => 100000,
    'celana' => 80000,
    'kaos' => 50000,
]; // pakaian yang dibeli
$diskon = 0.6; // atau 50%

$totalHarga = 0;
foreach ($pakaian as $cloth => $harga) {
    $totalHarga += $harga;
}

$total = $totalHarga * $diskon;

echo $total;
