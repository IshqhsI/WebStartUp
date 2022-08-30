<?php 

class Produk {
    public $namaBarang, 
           $kodeBarang;

    protected $hargaBarang;

    public function __construct ($namaBarang, $kodeBarang,  $hargaBarang) {
        $this->namaBarang = $namaBarang;
        $this->kodeBarang = $kodeBarang;
        $this->hargaBarang = $hargaBarang;

    }

    public function getInfoProduk(Produk $produk){
        $str = " {$this->namaBarang} | {$this->kodeBarang} | {$this->hargaBarang} ";
        return $str;
    } 

}

class Show {
    public function Show ($produk){
        $str = "{$produk->namaBarang} | {$produk->kodeBarang} | {$produk->jumlahBarang} | {$produk->hargaBarang}";
        return $str;
    }
}

class Tenda extends Produk {
    public $warna, $jumlahBarang;

    public function __construct ($namaBarang, $kodeBarang, $warna, $jumlahBarang, $hargaBarang) {

        parent::__construct($namaBarang, $kodeBarang, $hargaBarang);

        $this->warna = $warna;
        $this->jumlahBarang = $jumlahBarang;
    }

    public function getInfoProduk(Produk $produk){
        $str = " {$this->namaBarang} | 
                 {$this->kodeBarang} |
                 {$this->warna} | 
                 {$this->jumlahBarang} |  
                 {$this->hargaBarang} ";
        return $str;
    }
}

$produk1 = new Tenda("Tenda 2P Double Layer", "ten2pdoulay", "Merah", 1, 45000);

echo $produk1->getInfoProduk($produk1);

// echo $produk1->harga;