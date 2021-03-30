<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
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

    <div class="bg-primary text-white p-4">
        <p> Bilangan 1: <?= $x ?></p>
        <p> Bilangan 2: <?= $y ?></p>

    </div>

    <hr>
    <div class="container-fluid">

        <p>hasil penjumlahan adalah: <?= penjumlahan($x, $y) ?></p>
        <p>hasil pengurangan adalah: <?= pengurangan($x, $y) ?></p>
        <p>hasil perkalian adalah: <?= perkalian($x, $y) ?></p>
        <p>hasil pembagian adalah: <?= pembagian($x, $y) ?></p>
    </div>
</body>

</html>