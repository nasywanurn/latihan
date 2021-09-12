<?php
    $kartuMember = "ya";
    $belanjaan = 275000;
    $diskon = 0;
    $total = 0;
    $totalHarga = 0;

    if ($kartuMember == "ya") {
        if ($belanjaan >= 250000) {
            $diskon = "10%";
             $total = $belanjaan * 0.1;
            
        }
        else if ($belanjaan >= 100000) {
            $total = $belanjaan * 0.05;
            $diskon = "5%";
        }
        else {
            $diskon = "tidak mendapatkan diskon";
        }
    
    }
    else {
        if ($belanjaan >= 100000){
            $total = $belanjaan * 0.025;
            $diskon = "5%";
        }
        else {
            $diskon = "tidak mendapatkan diskon";
        }
    }

    $totalHarga = $belanjaan - $total;
    echo "Kartu member : <b>$kartuMember</b> <br>";
    echo "Total belanja : <b>Rp.$belanjaan</b><br>";
    echo "Diskon : <b>$total</b> <br>";
    echo "yang harus dibayar : <b>$totalHarga</b>";


?>