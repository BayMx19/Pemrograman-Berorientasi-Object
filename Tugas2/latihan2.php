<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pecahan</title>
    <style>
        center {
            background-color: #EEE8AA;
            padding: 30px;
            margin-left: 25%;
            margin-right: 25%;
        }
    </style>
</head>
<body>
<center >
<h2>Latihan 2 : Pecahan</h2>
<?php
class Pecahan{
    private int $pembilang;
    private int $penyebut;

    function __construct($pembilang , $penyebut){
        $this->pembilang=$pembilang;
        $this->penyebut=$penyebut;
    }

    public function getPembilang(): int {
        return $this->pembilang;
    }
    
    public function getPenyebut(): int {
        return $this->penyebut;
    }
    
    public function pecahan( int $pembilang1, int $penyebut1, int $pembilang2, int $penyebut2 ){
        $this->pembilang=$pembilang1;
        $this->penyebut=$penyebut1;
        $this->pembilang=$pembilang2;
        $this->penyebut=$penyebut2;
    }

    function tambah(pecahan $pecahan ){
        $this->pecahan=$pecahan;
        $tambah = $this->pembilang + $this->penyebut;
        return $tambah;
    }
    
}

$obyek1 = new Pecahan(3, 5);
echo "Obyek 1 : ". $obyek1->getPembilang();
echo "/";
echo $obyek1->getPenyebut() . "<br>";
$hasilObjek1 = bcdiv($obyek1->getPembilang(), $obyek1->getPenyebut(), 2);
echo "hasil objek 1 : " . $hasilObjek1 . "<br>" . "<br>";

$obyek2 = new Pecahan(5, 6);
echo "Obyek 2 : ". $obyek2->getPembilang();
echo "/";
echo $obyek2->getPenyebut()."<br>";
$hasilObjek2 = bcdiv($obyek2->getPembilang(), $obyek2->getPenyebut(), 2);
echo "hasil objek 2 : " . $hasilObjek2 . "<br>" . "<br>";

$tambahObjek = bcadd($obyek1->getPembilang(), $obyek1->getPenyebut(), 2);
echo "Nilai Penambahan kedua Objek : ". $tambahObjek;

?>

</center>
</body>
</html>


