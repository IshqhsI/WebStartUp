<?php 

class Produk {
    protected $namaBarang, 
              $kodeBarang,
              $hargaBarang;

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

    public function __construct ($namaBarang, $kodeBarang, $warna, $hargaBarang) {
        parent::__construct($namaBarang, $kodeBarang, $hargaBarang);
        $this->warna = $warna;
    }

    public function setJumlahBarang($jumlahBarang) {
        $this->jumlahBarang = $jumlahBarang;
    }

    public function getInfoProduk(Produk $produk){
        $str = " {$this->namaBarang} | 
                 {$this->kodeBarang} |
                 {$this->warna}  
                 {$this->jumlahBarang} |  
                 {$this->hargaBarang} ";
        return $str;
    }
}

$produk1 = new Tenda("Tenda 4P Double Layer", "ten4pdoulay", "Merah", 40000);

echo $produk1->getInfoProduk($produk1);
