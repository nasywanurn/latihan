<?php

    class Laptop{
        public $procie = 'Core i7';
        protected $VGA = 'GTX 1050';

        public function gaming(){
            return "Wush Wush";
        }
    }

    class ROG extends Laptop{
        public $procie = 'Core i9';
    }

    $Asus = new ROG();
    echo $Asus->procie;
    if (property_exixts($Asus, "VGA")){
        echo "<br>Laptop ini Mempunyai VGA<br>";
    }
    echo $Asus->gaming();

?>