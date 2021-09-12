<?php
    $uangUcup = 100000;
    $jajanMinum = 15000;
    $jajanSosisBakar = 25000;

    echo "Uang Ucup = <b>$uangUcup</b>";
    echo "<hr>";
    $uangUcup -= $jajanMinum;
    echo "Jajan minum <b>$jajanMinum</b> <br>";
    echo "Sisa uang Ucup jajan minum = <b>$uangUcup</b>";
    echo "<hr>";
    $uangUcup -= $jajanSosisBakar;
    echo "Jajan sosis bakar <b>$jajanSosisBakar</b><br>";
    echo "Sisa uang ucup jajan sosis bakar + minum = <b>$uangUcup</b>";
    echo "<hr>";
    $sedekah = $uangUcup * 0.1;
    echo "Sedekah ke musafir 10% dari sisa uang Ucup <b>$uangUcup</b> yaitu sebesar <b>$sedekah</b>";
    $uangUcup -= $sedekah; 
    echo "<br> sisa uang Ucup = <b>$uangUcup</b>";
    echo "<hr>";
    $nemuUang = $uangUcup * 0.5;
    echo "nemu uang dijalan sebesar 50% dari sisa uang Ucup <b>$uangUcup</b> yaitu sebesar <b>$nemuUang</b>";
    echo "<br> Sisa uang Ucup sekarang = <b>$nemuUang + $uangUcup</b>";
    echo "<hr>";
    $uangUcup += $nemuUang;
    echo "total uang Ucup adalah <b>Rp.$uangUcup</b>";
?>