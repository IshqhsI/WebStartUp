<?php 

class Produk {
    public $namaBarang, 
           $kodeBarang;

    protected $hargaBarang;

    public function __construct ($namaBarang, $kodeBarang) {
        $this->namaBarang = $namaBarang;
        $this->kodeBarang = $kodeBarang;
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
    public $warna, $jumlahBarang = 1, $hargaBarang, $sumHarga;

    public function setJumlahBarang($jumlahBarang){
        $this->jumlahBarang = $jumlahBarang;
    }

    public function getJumlahBarang(){
        return $this->setJumlahBarang($jumlahBarang);
    }


    public function setHargaBarang($hargaBarang){
        $this->hargaBarang = $hargaBarang;
    }

    public function getHargaBarang(){
        return $this->setHargaBarang($hargaBarang);
    }

    // public function getSumHarga(){ 
    //     $this->sumHarga = $this->getJumlahBarang() * $this->getHargaBarang();
    // }

    public function __construct ($namaBarang, $kodeBarang, $warna) {
        parent::__construct($namaBarang, $kodeBarang);
        $this->warna = $warna;
    }

    public function getInfoProduk(Produk $produk){
        $str = " Nama Barang : {$this->namaBarang} " . "<br>" . 
               " Kode Barang : {$this->kodeBarang} " . "<br>" .
               " Warna : {$this->warna} " . "<br>" . 
               " Jumlah : {$this->jumlahBarang}" . "<br>" .
               " Harga : Rp. " . $this->hargaBarang * $this->jumlahBarang;
        return $str;
    }
}

$produk1 = new Tenda("Tenda 2P Double Layer", "ten2pdoulay", "Merah");
echo $produk1->setJumlahBarang(10);
$produk1->setHargaBarang(40000);



echo $produk1->getInfoProduk($produk1);
// echo $produk1->harga;