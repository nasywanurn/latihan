<?php
    if(isset($_POST['Input'])){
        $lebar = $_POST['lebar'];
        $tinggi = $_POST['tinggi'];
        echo "lebar : $lebar";
        echo "panjang : $panjang";
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar) ;
        echo "Luas segitiga : $luas";
        echo "Keliling segitiga : $keliling";
    }

?>