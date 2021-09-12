<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <form ACTION="" METHOD="POST">
            masukkan jumlah bintang :
            <br>
            <input type="number" name="angka"><br>
            <input type="submit" name="Input" value="Input">
        </form>
        <?php
            if (isset($_POST['Input'])) {
            $angka = $_POST['angka'];
            for ($a = 1; $a <= $angka; $a++) {
                for ($b = $angka; $b >= $a; $b-=1) {
                    echo "&nbsp";
                }
                for ($c=1; $c <= $a; $c++) { 
                    echo "*";
                }
                echo "<br>";
                }
                for ($a=1; $a <= $angka; $a++) { 
                    for ($b=1; $b <= $a ; $b++) { 
                    echo "&nbsp";
                }
                for ($c=$angka; $c >= $a; $c-=1) { 
                    echo "*";
                }
                echo "<br>";
                }
        
            }
           
        
            
        ?>
    </body>
</html>