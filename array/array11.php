<?php
    //membuat array
    $hobi = [
        "Membaca",
        "Menulis",
        "Ngeblog"
    ];

    //menambah array
    $hobi[1] .= " Coding";

    //menghapus array
    unset($hobi[1]);

    //menambah array
    $hobi[] = "Olahraga";

    //cetak array dengan perulangan
    foreach ($hobi as $hobiku) {
        echo $hobiku."<br>";
    }
?>