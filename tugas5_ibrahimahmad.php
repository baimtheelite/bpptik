<?php
$x = 8; //bilangan 1
$y = 4; //bilangan 2

/*
    * @desc method ini digunakan untuk memproses penjumlahan
    * @param $x berisi bilangan 1 dalam bentuk integer
    * @param $y berisi bilangan 2 dalam bentuk integer
    * @return hasil dari penjumlahan bilangan 1 dan bilangan 2 dalam bentuk integer
*/
function penjumlahan($x, $y)
{
    return $x + $y;
}

/*
    * @desc method ini digunakan untuk memproses pengurangan
    * @param $x berisi bilangan 1 dalam bentuk integer
    * @param $y berisi bilangan 2 dalam bentuk integer
    * @return hasil dari pengurangan bilangan 1 dan bilangan 2 dalam bentuk integer
*/
function pengurangan($x, $y)
{
    return $x - $y;
}

/*
    * @desc method ini digunakan untuk memproses perkalian
    * @param $x berisi bilangan 1 dalam bentuk integer
    * @param $y berisi bilangan 2 dalam bentuk integer
    * @return hasil dari perkalian bilangan 1 dan bilangan 2 dalam bentuk integer
*/
function perkalian($x, $y)
{
    return $x * $y;
}

/*
    * @desc method ini digunakan untuk memproses pembagian
    * @param $x berisi bilangan 1 dalam bentuk integer
    * @param $y berisi bilangan 2 dalam bentuk integer
    * @return hasil dari pembagian bilangan 1 dan bilangan 2 dalam bentuk integer
*/
function pembagian($x, $y)
{
    return $x / $y;
}
?>

<p> Bilangan 1: <?= $x ?></p>
<p> Bilangan 2: <?= $y ?></p>

<hr>

<p>hasil penjumlahan adalah: <?= penjumlahan($x, $y) ?></p>
<p>hasil pengurangan adalah: <?= pengurangan($x, $y) ?></p>
<p>hasil perkalian adalah: <?= perkalian($x, $y) ?></p>
<p>hasil pembagian adalah: <?= pembagian($x, $y) ?></p>