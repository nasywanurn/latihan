<?php
    if (isset($_POST['Input'])) {
        $angkaSatu = $_POST['angkaSatu'];
        $angkaDua = $_POST['angkaDua'];
        $tambah = $angkaSatu + $angkaDua;
        echo "$angkaSatu + $angkaDua : <b>$tambah</b><br>";
        $kurang = $angkaSatu - $angkaDua;
        echo "$angkaSatu - $angkaDua : <b>$kurang</b><br>";
        $kali = $angkaSatu * $angkaDua;
        echo "$angkaSatu * $angkaDua : <b>$kali</b><br>";
        $bagi = $angkaSatu / $angkaDua;
        echo "$angkaSatu : $angkaDua : <b>$bagi</b><br>";
        
    }
?>