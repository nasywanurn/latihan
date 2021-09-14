<?php

    // mendefinisikan sebuah class
    class Kucing 
    {

        // membuat property atau atributes
        public $warna;

        // construct adalah method khusus yang akan dipanggil pertama kali
        public function __construct($warna)
        {
            $this->warna = $warna;
        }

        // membuat method (behavior / perilaku)
        public function bersuara()
        {
            return "meowng... meowng... meowng...";
        }

        public function berburu()
        {
            return "berburu ikan";
        }

    }

    // membuat object (inisiasi object)
    $kucing1 = new Kucing("Hitam");
    echo "Warna kucing 1 : " . $kucing1->warna . "<br>";

    $kucing2 = new Kucing("Oren");
    echo "Warna kucing 2 : " . $kucing2->warna . "<br>";

?>