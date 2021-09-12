<?php

    {
    
        class Komputer
        {
           
            public $namaPemilik = "Fikri";
            public $merk = "Asus";
            public $ukuranLayar = "20 inch";

            public function dinyalakan()
            {
                return "komputer dinyalakan";
            }
            public function dimatikan()
            {
                return "komputer dimatikan";
            }
        }

        $Komputer1 = new Komputer();
        echo "Nama pemilik  : " . $Komputer1->namaPemilik . "<br>";
        echo "Merk Komputer : " . $Komputer1->merk . "<br>";
        echo "Ukuran Layar : " . $Komputer1->ukuranLayar . "<br>";
        echo "Keterangan komputer : " . $Komputer1->dinyalakan() . "<hr>";

        $Komputer2 = new Komputer();
        $Komputer2->namaPemilik = "Ucup";
        $Komputer2->merk = "Lenovo";
        $Komputer2->ukuranLayar = "19 inch";
        echo "Nama pemilik  : " . $Komputer2->namaPemilik . "<br>";
        echo "Merk Komputer : " . $Komputer2->merk . "<br>";
        echo "Ukuran Layar : " . $Komputer2->ukuranLayar . "<br>";
        echo "Keterangan komputer : " . $Komputer2->dinyalakan() . "<hr>";

        $Komputer3 = new Komputer();
        $Komputer3->namaPemilik = "Lala";
        $Komputer3->merk = "Lenovo";
        $Komputer3->ukuranLayar = "21 inch";
        echo "Nama pemilik  : " . $Komputer3->namaPemilik . "<br>";
        echo "Merk Komputer : " . $Komputer3->merk . "<br>";
        echo "Ukuran Layar : " . $Komputer3->ukuranLayar . "<br>";
        echo "Keterangan komputer : " . $Komputer3->dimatikan() . "<hr>";

        $Komputer4 = new Komputer();
        $Komputer4->namaPemilik = "Lulu";
        $Komputer4->merk = "Dell";
        $Komputer4->ukuranLayar = "25 inch";
        echo "Nama pemilik  : " . $Komputer4->namaPemilik . "<br>";
        echo "Merk Komputer : " . $Komputer4->merk . "<br>";
        echo "Ukuran Layar : " . $Komputer4->ukuranLayar . "<br>";
        echo "Keterangan komputer : " . $Komputer4->dinyalakan() . "<hr>";

        $Komputer5 = new Komputer();
        $Komputer5->namaPemilik = "Ujang";
        $Komputer5->merk = "Acer";
        $Komputer5->ukuranLayar = "24 inch";
        echo "Nama pemilik  : " . $Komputer5->namaPemilik . "<br>";
        echo "Merk Komputer : " . $Komputer5->merk . "<br>";
        echo "Ukuran Layar : " . $Komputer5->ukuranLayar . "<br>";
        echo "Keterangan komputer : " . $Komputer5->dinyalakan() . "<hr>";
        
        

    }

?>