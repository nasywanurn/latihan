<?php

    // Contoh constructor dan destructor

    // buat class laptop
    class laptop{
        private $pemilik = "Andi";
        private $merk = "Lenovo";

        public function __construct(){
            echo "Ini berasal dari Constructor Laptop";
        }

        public function hidupkanLaptop(){
            return "Hidupkan Laptop $this->merk punya $this->pemilik";
        }

        public function __destruct(){
            echo "Ini berasal dari Destructor Laptop";
        }
    }
    // buat objek dari class laptop (inisiasi)
    $laptop_Andi = new laptop();
    echo "<br />";
    echo $laptop_Andi->hidupkanLaptop();
    echo "<br />";
?>