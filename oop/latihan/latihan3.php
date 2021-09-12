<?php

    {
        class Persegi
        {
        
            public $sisi;
            
            public function luasPersegi()
            {
                return ($this->sisi * $this->sisi);
            }

            public function kelilingPersegi()
            {
                return ($this->sisi) * 4;
            }

        } 
        
        $Persegi1 = new Persegi();
        $Persegi1->sisi = 20;
        
        echo "Sisi Persegi : " . $Persegi1->sisi . "<br>";
        echo "Luas persegi : " . $Persegi1->luasPersegi() . "<br>";
        echo "Keliling persegi : " . $Persegi1->kelilingPersegi() . "<br>";
       
    }

?>