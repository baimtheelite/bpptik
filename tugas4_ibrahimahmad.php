<form action="" method="POST">
    <label for="jumlah_bintang">Jumlah Bintang</label>
    <input type="text" name="jumlah_bintang">
    <button type="submit">kirim</button>
</form>
<?php
if (isset($_POST["jumlah_bintang"])) {
    $jumlah_bintang = $_POST["jumlah_bintang"];
    for ($i = 1; $i <= $jumlah_bintang; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
?>