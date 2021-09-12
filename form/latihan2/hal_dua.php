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
        <form action="pro-hal_dua.php" method="post">
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
        <fieldset>
            <legend>Verifikasi Pengembalian</legend>
        Tanggal Kembali : <input type="date" name="verTglKembali"><br>
        <!-- Masukan uang pembayaran : <input type="number" name="pembayaran"><br> -->
        <input type="submit" name="Input" value="Input">
        </fieldset>
        </form>   
    </body>
</html>
