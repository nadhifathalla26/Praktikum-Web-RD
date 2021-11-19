<?php

    include "index.php";
    echo "<br><div id='main_struk'><h1><b>--- NOTA BELANJA ---</b></h1></div>";

    class buah {
        var $totalMangga, $totalJambu, $totalSalak;

        public function __construct($mangga, $jambu, $salak){
            $this->mangga = $mangga;
            $this->jambu = $jambu;
            $this->salak = $salak;
        }

        public function getMangga(){
            $this->totalMangga = $this->mangga * 15000;
            echo "<div id='struk'>Harga Mangga : Rp.$this->totalMangga</div>";
        }
            
        public function getJambu(){
            $this->totalJambu = $this->jambu * 13000;
            echo "<div id='struk'>Harga Jambu : Rp.$this->totalJambu</div>";
        }
            
        public function getSalak(){
            $this->totalSalak = $this->salak * 10000;
            echo "<div id='struk'>Harga Salak : Rp.$this->totalSalak</div>";
        }

        public function total(){
            $total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
            echo "<div id='main_struk'>Total Harga = Rp.$total</div>";
        }
    }

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
$transaksi = new buah($mangga, $jambu, $salak);
$transaksi->getMangga();
$transaksi->getJambu();
$transaksi->getSalak();
$transaksi->total();
        
?>