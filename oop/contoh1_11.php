<?php

    // cara mengakses constructor dan destructor parent class
    // efek inheritance dalam constructor dan destructor

    //buat class komputer
    class komputer{

        public function __construct(){
            echo "constructor dari class komputer <br />";
        }

        public function __destruct(){
            echo "Destructor dari class komputer <br />";
        }
    }

    class laptop extends komputer{

    }

    class chromebook extends laptop{

    }

    //buat objek dari class chromebook (inisiasi)
    $gadged_baru = new chromebook();
    echo "Belajar OOP PHP <br />";

?>