<?php

    // mengakses property dan method parent class

    //buat class komputer
    class komputer{

        public function lihat_spec(){
            return "Spek komputer : Acer, Processor Intelcore i7, RAM 4GB";
        }
    }

    //turunkan class komputer ke laptop
    class laptop extends komputer{

        public function lihat_spec(){
            return "Spek Laptop: Asus, Processor Intel core i5, RAM 2GB";
        }
    }

    //buat objek dari class laptop (inisiasi)
    $gadged_baru = new laptop();

    //panggil method lihat_spec()
    echo $gadged_baru->lihat_spec();


?>