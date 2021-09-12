<?php

    //nilai akademik > 85 lulus
    //nilai atletik > 83 tidak lulus

    $nilai_akademik = 80;
    $nilai_atletik = 83;

    echo "Nilai Akademik : <b>$nilai_akademik</b> <br>";
    echo "Nilai Atletik : <b>$nilai_atletik</b> <br>";
    $lulus = ($nilai_akademik >= 85) && ($nilai_atletik >= 83) ? " <b>Lulus </b>": " <b>Tidak lulus </b>";
    echo "dinyatakan :" .$lulus;
    
?>