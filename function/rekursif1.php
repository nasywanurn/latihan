<?php
    
    /*
    menampilkan output
    Perulangan ke-1
    Perulangan ke-2
    Perulangan ke-3
    ...
    Perulangan ke-20
    */

    tampilkanAngka(20);
    function tampilkanAngka (int $jumlah, int $indeks = 1) {
        echo "Perulangan ke-{$indeks} <br>";
    
        if ($indeks < $jumlah) { 
            tampilkanAngka($jumlah, $indeks + 1);
        }
    }

?>