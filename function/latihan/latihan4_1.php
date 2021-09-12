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
            <legend>Formulir perpangkatan - Fungsi rekrusif</legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <th>Masukkan bilangan</th>
                        <td><input type="number" name="bil" value="<?php echo "$bil"; ?>"></td>
                    </tr>
                    <tr>
                        <th>Masukan Pangkat</th>
                        <td><input type="number" name="pangkat" value="<?php echo "$pangkat"; ?>"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" name="Pilih" value="Simpan"></td>
                    </tr>
                </table>
            </form>
        </fieldset>

        <?php
            if(isset($_POST['Pilih'])){
                $bil = $_POST['bil'];
                $pangkat = $_POST['pangkat'];
                $hasil = 0;
                //$hasil = $bil ** $pangkat;
            //}
            function perpangkatan($bil, $pangkat){
                $hasil = $bil ** $pangkat;
                return $hasil;
            }
            echo "<br>";
            //echo "Perpangkatan ";
            for ($i=1; $i <= $pangkat; $i++) { 
                echo $bil;
                if ($i < $pangkat) {
                    echo " x ";
                }
            }
            echo " = " . perpangkatan($bil, $pangkat);
            //echo perpangkatan($bil, $pangkat);
            //return $hasil;
            }    
        ?>
        
    </body>
</html>