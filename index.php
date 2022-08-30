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

    public function getInfoProduk(Produk $produk){
        $str = " {$this->namaBarang} | {$this->kodeBarang} | {$this->hargaBarang} ";
        return $str;
    } 

}

class Show {
    public function Show (Produk $produk){
        $str = "{$produk->namaBarang} | {$produk->kodeBarang} | {$produk->jumlahBarang} | {$produk->hargaBarang}";
        return $str;
    }
}

class Tenda extends Produk {

}

$produk1 = new Tenda("Tenda 2P Double Layer", "ten2pdoulay", 1, 45000);


$tes = new Tenda();
echo $tes->getInfoProduk($produk1);