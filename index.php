<?php 

class Produk {
    public $namaBarang, 
           $kodeBarang,
           $jumlahBarang,
           $hargaBarang;
    
    public function __construct (Produk $produk) {
        $this->namaBarang = $namaBarang;
        $this->kodeBarang = $kodeBarang;
        $this->jumlahBarang = $jumlahBarang;
        $this->hargaBarang = $hargaBarang;
    }
}