<form method="post" action="">
    Masukkan Bilangan  = 
    <br>
    <input type="text" name="bilangan" placeholder="Masukkan Bilangan Anda Disini ...">
    <br>
    <input type="submit" name="submit" value="Tekan disini">

</form>

<?php

$i = $_POST["bilangan"];

    $kata = "bilangan " . $i . " merupakan bilangan ";
    $kata .= ($i >= 0) ? "positif" : "negatif";
    $kata .= " dan merupakan bilangan ";
    $kata .= ($i % 2 ==0 ) ? "genap" : "ganjil";
    echo $kata. "<br>";
?>
