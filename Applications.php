<?php
class mobil {
    public $nama, $merk, $warna, $kecepatanmaksimal, $jumlahpenumpang;

    public function tambahkecepatan(){
        return "Kecepatan bertambah";
    }
}

class MobilSport Extends mobil{
    public $turbo = false;



    public function aktifkanTurbo(){
        $this->turbo = true;
        return "Turbo Diaktifkan";
    }
}






?>