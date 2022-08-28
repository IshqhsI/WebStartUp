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
        $str = "{$produk->$namaBarang} | {$produk->kodeBarang} | {$produk->$jumlahBarang} | {$produk->$hargaBarang}";
        return $str;
    }
}

$produk1 = new produk();