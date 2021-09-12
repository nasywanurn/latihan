<?php
    
    /*
    menampilkan output terbalik
    Perulangan ke-20
    Perulangan ke-19
    Perulangan ke-18
    ...
    Perulangan ke-1
    */

    tampilkanAngka(20);
    function tampilkanAngka (int $jumlah, int $indeks = 1) {
        if ($indeks < $jumlah) { 
            tampilkanAngka($jumlah, $indeks + 1);
        }
        echo "Perulangan ke-{$indeks} <br>";
    }


?>