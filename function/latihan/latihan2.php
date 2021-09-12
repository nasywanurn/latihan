<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body> 
        <fieldset>
            <legend>Menghitung Luas dan keliling Lingkaran</legend>
        <form action="" method="POST">
        Masukan jari-jari : <input type="number" name="jari">
        <input type="submit" name="Pilih" value="Simpan">
        </form>
        <?php

        if(isset($_POST['Pilih'])){
        $jari = $_POST['jari'];
        
        //echo "Jari-jari = $jari <br>";
        //}

        
        function luasLingkaran($jari, $phi = 3.14)
        {
            $luas = $phi * $jari * $jari;
            return $luas;
            //echo "Luas = $luas <br>";
        }

        function kelilingLingkaran($jari, $phi = 3.14)
        {
            $keliling = $phi *(2*$jari);
            return $keliling;
            //echo "Keliling = $keliling <br>";
        }

        echo "Jari-jari = $jari <br>";
        echo "Luas = " .luasLingkaran($jari).  "<br>";
        echo "Keliling = " . kelilingLingkaran($jari) ."<br>";

        }
        ?>
        </fieldset>
    </body>
</html>

