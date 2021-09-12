
<?php
    if (isset($_POST['Pilih'])) {
        $Pilih = $_POST['menu'];
        var_dump($_POST['Pilih']);
        if ($Pilih == "segitiga") {
            header("location:segitiga.php");       
        }
        else if ($Pilih == "lingkaran") {
            header("location:lingkaran.php"); 
            //luas=3.14 *jari-jari*jari-jari
            //keliling=3.14 *(2*jari-jari)      
        }
        else if ($Pilih == "persegi") {
            header("location:persegi.php");       
        }
        else if ($Pilih == "persegip") {
            header("location:persegip.php");       
        }
        /*else {
        echo "tidak ada pilihan";
        }
        */
    }
?>

