<?php

    // scope resolution operator

    class komputer{

        public function lihat_spec(){
            return "Spec komputer : Acer, Processor Intel core i5, RAM 2GB";
        }
    }

    class laptop extends komputer{
        
        public function lihat_spec(){
            return "Spec Laptop: Asus, Processor Intel core i5, RAM 2GB";
        }

        public function lihat_spec_komputer(){
            return parent::lihat_spec();
        }
    }

    // buat objek dari class laptop (inisiasi)
    $gadged_baru = new laptop();

    //panggil method lihat_spec()
    echo $gadged_baru->lihat_spec();

    echo "<br />";

    //panggil method lihat_spec_komputer()
    echo $gadged_baru->lihat_spec_komputer();
?>