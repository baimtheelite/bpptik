<?php

//Konsep paradigma dan struktur program

//Fungsi pure function
const PI = 3.14;

function luasLingkaran($r)
{
    $luas = PI * $r * $r;
    return $luas;
}

echo luasLingkaran(21);

//fungsi recursion
function countdown($i)
{
    if ($i <= 0) {
        return 0;
    } else {
        return countdown($i - 1);
    }
}

echo countdown(100);
