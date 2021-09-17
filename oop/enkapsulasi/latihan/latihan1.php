<?php
    class Login
    {
        public $nama = "Nasywa";
        public $email = "nasywa@gmail.com";
        protected $noHp = "09881234567";
        private $password = "nasywa5??";

        protected function tampilkanNoHp(){
            return $this->noHp;
        }

        public function tampilkanPassword(){
            return $this->password;
        }

       
    }

    class Data extends Login{

        public function getNoHp(){
            return $this->tampilkanNoHp();
        }
        public function getPassword(){
            return $this->tampilkanPassword();
        }
    }

    $login = new Login();
    echo $login->nama . "<br>";
    echo $login->email . "<br>";
    $data = new Data();
    echo $data->getPassword() . "<br>";
    echo $data->getNoHp() . "<br>";
    
?>