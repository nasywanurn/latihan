<?php
    if(isset($_POST['Input'])){
        $sisi = $_POST['sisi'];
        echo "sisi : $sisi <br>";
        $luas = $sisi * $sisi ;
        $keliling = $sisi + $sisi + $sisi + $sisi;
        echo "Luas segitiga : $luas <br>";
        echo "Keliling segitiga : $keliling <br>";
    }
    //
?>