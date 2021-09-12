<?php
    if (isset($_POST['Input'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $tglPinjam = $_POST['tglPinjam'];
        $tglKembali = $_POST['tglKembali'];
        $penjamin = $_POST['penjamin'];
        $namaMobil = $_POST['namaMobil'];
        //$platMobil = $_POST['platMobil'];
        $jenisMobil = $_POST['jenisMobil'];
        $merkMobil = $_POST['merkMobil'];
        $supir = $_POST['supir'];
        $verTglKembali = $_POST['verTglKembali'];
         //$pembayaran = $_POST['pembayaran'];
        //$kembalian = 0;
        $biaya = 0;
        $denda = 0; 
        $totalDenda = 0;  
        $totalPembayaran = 0;
        // $totalPembayaran = $biaya + $denda;   
        $lamaPinjam = (strtotime($tglKembali) - strtotime($tglPinjam))/60/60/24;
        $telat = (strtotime($verTglKembali) - strtotime($tglKembali))/60/60/24;
        if ($telat > 0) {
            $denda = $telat * 24 * 10000;
            $totalDenda = $telat * $denda;
        }
        else if ($telat == 0) {
            $denda = $telat * 24 * 10000;
            $totalDenda = $telat * $denda;
        }

        if ($supir == "Ya") {
            $harian = 275000;
            $biaya = $lamaPinjam * 275000;
        }
        else {
            $harian = 150000;
            $biaya = $lamaPinjam * 150000;
        }     
        $totalPembayaran = $biaya + $totalDenda; 
        if ($pembayaran > $biaya) {
            $kembalian = $pembayaran - $biaya;
            $keterangan = "Terimakasih, uang kembalian : $kembalian";
            echo "keterangan : $keterangan";
        }
        else if ($pembayaran == $biaya) {
            //$kembalian = $pembayaran - $biaya;
            $keterangan = "Terimakasih";
            echo "keterangan : $keterangan";
        }
        else if ($pembayaran < $biaya){
            //$kembalian = $pembayaran - $biaya;
            $keterangan = "Maaf nama anda di blacklist";
            echo "keterangan : $keterangan";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
        <!-- <input type="hidden"> -->
        <input type="hidden" name="nama" value = <?php echo $nama; ?>>
        <input type="hidden" name="nik" value = <?php echo $nik; ?>>
        <input type="hidden" name="jk" value = <?php echo $jk; ?>>
        <input type="hidden" name="agama" value = <?php echo $agama; ?>>
        <input type="hidden" name="tglPinjam" value = <?php echo $tglPinjam; ?>>
        <input type="hidden" name="tglKembali" value = <?php echo $tglKembali; ?>>
        <input type="hidden" name="penjamin" value = <?php echo $penjamin; ?>>
        <input type="hidden" name="namaMobil" value = <?php echo $namaMobil; ?>>
        <input type="hidden" name="jenisMobil" value = <?php echo $jenisMobil; ?>>
        <input type="hidden" name="merkMobil" value = <?php echo $merkMobil; ?>>
        <input type="hidden" name="supir" value = <?php echo $supir; ?>>

        </form>
    
    </body>
</html>