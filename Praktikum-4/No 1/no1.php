<!-- created by Isa Iman Muhammad - 20051397019 -->

<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" type="text/css" href="/A_019_Isa Iman Muhammad_PBO_Prak4/No 1/no1.css"> 
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal 1</h2>


<?php

    class Orang {
        protected $nama,$umur;
        public function __construct($nama,$umur){
        $this->nama = $nama;
        $this->umur = $umur;
        }
    }

    class Dosen extends Orang   {
        private $nip;
        public function __construct($nama, $umur, $nip) {
            $this->nip = $nip;
            parent::__construct($nama, $umur);    
        }

        public function hasil() {
            return $this->nama . ' , umur ' . $this->umur. ' , NIP ' . $this->nip;
        }
    }

    $dosen1 = new Dosen('Victor', 42, 20051397019); 
    $dosen2 = new Dosen('Carlo', 39, 20051397110);
    $dosen3 = new Dosen('Sara', 28, 20051397129);

    echo $dosen1->hasil();
        echo '<br> <br>';
    echo $dosen2->hasil();
        echo '<br> <br>';
    echo $dosen3->hasil();
        echo '<br> <br>';

?>

</div>
</body>
</html>
