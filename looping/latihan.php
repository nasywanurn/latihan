<?php

    echo "No 1 <br>";
    for ($i = 2; $i <= 64; $i*=2) { 
        echo " $i";
    }
    echo "<hr>";
    echo "No 2 <br>";

    for ($j = 625; $j >= 5; $j/=5) { 
        echo " $j";
    }

    echo "<hr>";
    echo "No 3 <br>";
    $bil = [18, 45, 29, 61, 47, 34];
    for ($i = 0; $i <= count($bil); $i++){
        $result[$i] = $bil[$i] % 3;
        echo $bil[$i] % 3 = $result[$i];
    }

    /*foreach ($bil as $val){
        $hasil = $val % 3;
        echo "$val % 3 = $hasil";
        
    }*/
    
    echo "<hr>";
    echo "No 4 <br>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    echo "<br>";

    
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j > $i; $j--) {
            echo "_";
        }
        echo "<br>";
        for ($b = 0; $b < 4; $b++) {
            echo " * ";
        }
        echo "<br>";

    }
    
    
?>