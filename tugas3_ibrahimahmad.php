<h1>Menentukan bilangan Ganjil Genap di PHP</h1>

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "<p style='color: blue; margin: 0'>$i = ini bilangan genap</p>";
    } else {
        echo "<p style='color: red; margin: 0'>$i = ini bilangan ganjil</p>";
    }
}
?>