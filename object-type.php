<?php 
class produk {
    public $barang,
            $merk,
            $harga;

            public function getCetak(){
                return "$this->merk, (Rp $this->harga)";
            }
            public function __construct($barang = "Nama Barang", $merk="Merk", $harga=0){
                $this->barang = $barang;
                $this->merk = $merk;
                $this->harga = $harga;
            }
        }
class cetakinfoproduk{
    public function cetakinfo($produk){
        $str="{$produk->barang}, {$produk->getCetak()}";
        return $str;
    }
}

$produk1 = new produk ("Ideapad 310","Lenovo",7000000);
$produk2 = new produk ("FlashDick","Sandisk",100000);
$produk3 = new produk ("Markboock Fire","Graple",20090000000);
$produk4 = new produk ("Moose","Dessert",9000000);
$infoproduk = new cetakinfoproduk();

echo "Nama Barang Laptop:" . $produk1 ->getCetak();
echo "<br>";
echo "Nama Barang Aksesoris:" . $produk2 ->getCetak();
echo "<br>";
echo "Nama Barang Laptop:" . $produk3 ->getCetak();
echo "<br>";
echo "Nama Barang Aksesoris:" . $produk4 ->getCetak();
echo "<br>";
echo $infoproduk-> cetakinfo($produk1);




