<?php

//menentukan grade mahasiswa

$nilai = 70;

if ($nilai <= 100 && $nilai >= 85) {
    echo 'A';
} else if ($nilai <= 84 && $nilai >= 75) {
    echo 'A-';
} else if ($nilai <= 74 && $nilai >= 70) {
    echo 'B+';
} else if ($nilai <= 69 && $nilai >= 65) {
    echo 'B';
} else if ($nilai <= 64 && $nilai >= 60) {
    echo 'B-';
} else if ($nilai <= 59 && $nilai >= 55) {
    echo 'C';
} else if ($nilai <= 54 && $nilai >= 40) {
    echo 'D';
} else {
    echo 'E';
}
