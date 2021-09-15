<form method="post" action="">
<h2>A. NILAI AWAL :</h2>
    <input type="text" name="awal" placeholder="Masukkan bilangan">
    <br><br>
<h2>B. NILAI BEDA :</h2>
    <input type="text" name="beda" placeholder="Masukkan bilangan">
    <br><br>
<h2>C. NILAI SUKU KE- :</h2>
    <input type="text" name="suku" placeholder="Masukkan bilangan">
    <br><br> 
    <input type="submit" name="submit" value="ENTER">
</form>
<br>

<?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $awal = $_POST['awal'];
         $beda = $_POST['beda'];
         $suku = $_POST['suku'];
         echo "Nilai dari deret tersebut adalah ";


         for ($i=0; $i < $suku; $i++) {
            $awal = $awal + $beda;
            echo $awal.',';
         }
      }
   ?>
