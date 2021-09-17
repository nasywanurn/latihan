<?php



    // buat class komputer
    class komputer{

        public function __construct(){
            echo "constructor dari class komputer <br />";
        }

        public function __destruct(){
            echo "Destructor dari class komputer <br />";
        }
    }

    // turunkan class komputer ke laptop
    class laptop extends komputer{
        
         public function __construct(){
            parent::__construct();
            echo "constructor dari class laptop <br />";
        }

        public function __destruct(){
            parent::__destruct();
            echo "Destructor dari class laptop <br />";
        }
    }

    // turunkan class laptop ke chromebook
    class chromebook extends laptop{
        public function __construct(){
            parent::__construct();
            echo "constructor dari class chromebook <br />";
        }

        public function __destruct(){
            parent::__destruct();
            echo "Destructor dari class chromebook <br />";
        }
    }

    //buat objek dari class chromebook (inisiasi)
    $gadged_baru = new chromebook();
    echo "Belajar OOP PHP <br />";

?>