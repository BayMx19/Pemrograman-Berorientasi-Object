<!DOCTYPE html>
<html lang="id">
<head>
  <title>PROGRAM DATA NOVEL DETEKTIF</title>
</head>
<body>
<?php
echo "PROGRAM DATA NOVEL DETEKTIF" . "<br>" . "<br>";
class novelDetektif {
    public  $judul = "judul",
            $pengarang = "penulis",
            $thnTerbit = "tahun terbit",
            $deskripsi = "deskripsi",
            $hargaBeli = 70000,
            $hargaJual = 90000;
    public function __construct( $judul, $pengarang, $thnTerbit, $deskripsi, $hargaBeli) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->thnTerbit = $thnTerbit;
        $this->deskripsi = $deskripsi;
        $this->hargaBeli = $hargaBeli;
    }
       public function getKeterangan (){
        return "$this->judul, $this->pengarang, $this->thnTerbit";
    }
    public function hitungHargaJual(){
        // $hargaJual = $hargaBeli-20/100*$hargaBeli;
    }
}
class CetakInfo {
    public function cetak($novelDetektif) {
        $str = "{$novelDetektif->getKeterangan()} | {$novelDetektif->deskripsi} | {$novelDetektif->hargaBeli}";
        return $str;
    }
}
$novelDetektif1 = new novelDetektif("Judul : The Murder of Roger Ackroyd", "Nama Pengarang : Agatha Christie", "Tahun Terbit : 1926", "Tokoh utama dalam novel ini bernama Hercules Poirot. Poirot adalah seorang dokter yang hidup membujang hingga usia paruh baya. Dia tinggal bersama kakak perempuannya. Poirot seorang dokter desa yang gemar berkebun dan hidup bersahaja.", 70000);
$novelDetektif2 = new novelDetektif("Judul : A is For Alibi", "Nama Pengarang : Sue Grafton", "Tahun Terbit : 2002", "Kisah detektif karya Sue Grafton 'A is for Alibi' memakai racun sebagai motifnya dan racun yang dipilih adalah bunga mentega atau oleander yang dihancurkan. Banyak usaha yang telah dilakukan oleh pembunuh untuk menyembunyikan kejahatan mereka, karena racun ini telah dibuat menjadi tablet dan disamarkan sebagai pil antihistamin yang tidak berbahaya.", 40000 );
$novelDetektif3 = new novelDetektif("Judul : Knots & Crosses", "Nama Pengarangan : Ian Rankin", "Tahun Terbit : 2004", "Novel ini terdiri dari tokoh pengedar narkoba besar bernama Michael Rebus. Dia memiliki seorang saudara lelaki bernama John Rebus yang seorang polisi. Saudaranya sedang diselidiki oleh protagonis utama cerita ini yang bernama Jim Stevens, seorang jurnalis. Berlatar dunia kriminal di Edinburgh, Skotlandia, Stevens berusaha untuk mengetahui seberapa banyak John Rebus mengetahui tentang kegiatan kriminal yang dilakukan saudaranya dan pembunuhan dua gadis muda.", 50000 );
$infoNovelDetektif = new CetakInfo();
echo $infoNovelDetektif->cetak($novelDetektif1) . "<br>" . "<br>";
echo $infoNovelDetektif->cetak($novelDetektif2) . "<br>" . "<br>";
echo $infoNovelDetektif->cetak($novelDetektif3) . "<br>" . "<br>";
?>
</body>
</html>
