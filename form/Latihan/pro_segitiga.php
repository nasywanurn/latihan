<?php
    if(isset($_POST['Input'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        echo "alas : $alas <br>";
        echo "tinggi : $tinggi <br>";
        $luas = $alas * $tinggi;
        $keliling = 1/2 * $alas * $tinggi;
        echo "Luas segitiga : $luas <br>";
        echo "Keliling segitiga : $keliling <br>";
    }
    //luas=1/2*a*t
    //k=3*sisi;
?>