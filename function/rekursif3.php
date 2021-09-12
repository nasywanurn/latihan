<?php

    function faktorial ($n) {
        echo "faktorial({$n}) = faktorial(" . ($n - 1) . ") <br>";

        if ($n > 2) {
            faktorial($n - 1);
        }
    }

    # panggil
    faktorial(5);


    /*
    
    output : 
    
    faktorial(5) = faktorial(4)
    faktorial(4) = faktorial(3)
    faktorial(3) = faktorial(2)
    faktorial(2) = faktorial(1)
    
    */


?>