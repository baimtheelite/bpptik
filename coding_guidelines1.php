<?php

//hitung nilai mahasiswa di kampus budi luhur

$nilaiAbsen = 0.1;
$nilaiTugas = 0.2;
$nilaiUts = 0.3;
$nilaiUas = 0.4;

// contoh nilai mahasiswa 100 semua
$nilai = (100 * $nilaiAbsen) + (100 * $nilaiTugas) + (100 * $nilaiUts) + (100 * $nilaiUas);


//menghasil nilai mahasiswa
echo $nilai;
