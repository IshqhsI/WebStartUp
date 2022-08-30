<?php 

class Produk {
    public $namaBarang, 
           $kodeBarang,
           $jumlahBarang,
           $hargaBarang;

    public function __construct ($namaBarang, $kodeBarang, $jumlahBarang, $hargaBarang) {
        $this->namaBarang = $namaBarang;
        $this->kodeBarang = $kodeBarang;
        $this->jumlahBarang = $jumlahBarang;
        $this->hargaBarang = $hargaBarang;
    }
}

class Show {
    public function Show (Produk $produk){
        $str = "{$produk->namaBarang} | {$produk->kodeBarang} | {$produk->jumlahBarang} | {$produk->hargaBarang}";
        return $str;
    }
}

$produk1 = new produk("Tenda 2P Double Layer", "ten2pdoulay", 1, 45000);
$produk2 = new produk("Tenda 4P Double Layer", "ten4pdoulay", 1, 40000);

$show = new Show();
$show = $show->Show($produk1);
echo $show . "<br>";

$show = new Show();
$show = $show->Show($produk2);
echo $show;
