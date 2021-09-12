<?php
    if(isset($_POST['Input'])){
        $jari = $_POST['jari'];
    
        echo "jari-jari : $jari <br>";
       
        $luas=3.14 * $jari * $jari;
        $keliling=3.14 *(2*$jari);
        echo "Luas segitiga : $luas <br>";
        echo "Keliling segitiga : $keliling <br>";
    }

?>