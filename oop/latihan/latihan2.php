<?php

    {
        class Segitiga
        {
            public $alas;
            public $tinggi;
            public $luasSegitiga;
            public $a, $b, $c;
            
            public function luasSegitiga()
            {
                return ($this->alas * $this->tinggi) / 2;
            }

            public function kelilingSegitiga()
            {
                return ($this->a + $this->b + $this->c);
            }

        } 
        
        $Segitiga1 = new Segitiga();
        $Segitiga1->alas = 20;
        $Segitiga1->tinggi = 30;
        $Segitiga1->a = 10;
        $Segitiga1->b = 10;
        $Segitiga1->c = 10;

        echo "Alas segitiga : " . $Segitiga1->alas . "<br>";
        echo "Tinggi segitiga : " . $Segitiga1->tinggi . "<br>";
        echo "sisi 1 : " . $Segitiga1->a . "<br>";
        echo "sisi 2 : " . $Segitiga1->b . "<br>";
        echo "sisi 3 : " . $Segitiga1->c . "<br>";
        echo "Luas segitiga : " . $Segitiga1->luasSegitiga()  . "<br>";
        echo "Luas segitiga : " . $Segitiga1->kelilingSegitiga()  . "<br>";
       
    }

?>