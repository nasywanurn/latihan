<?php
    $arrNilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
    echo "<b>Array sebelum pengurutan</b>";
    echo "<pre>";
    print_r ($arrNilai);
    echo "</pre>";

    ksort ($arrNilai);
    reset ($arrNilai);
    echo "<b>Array setelah pengurutan dengan ksort()</b>";
    echo "<pre>";
    print_r ($arrNilai);
    echo "</pre>";

    ksort ($arrNilai);
    reset ($arrNilai);
    echo "<b>Array setelah pengurutan dengan ksort()</b>";
    echo "<pre>";
    print_r ($arrNilai);
    echo "</pre>";


?>