<?php

    //buat class laptop
    class laptop{
        private $pemilik;
        private $merk;

        // constructor sebagai pembuaut nilai awal
        public function __condtruct($pemilik, $merk){
            $this->pemilik = $pemilik;
            $this->merk = $merk;
        }

        public function hidupkan_laptop(){
            return "Hidupkan Laptop $this->merk punya $this->pemilik";
        }
    }

    // buat objek dari class laptop (inisiasi)
    $laptop_andi = new laptop("Andi", "Lenovo");

    echo $laptop_andi->hidupkan_laptop();
    echo "<br />";

    $laptop_anto = new laptop("Anto", "Acer");
    echo $laptop_anto->hidupkan_laptop();
?>