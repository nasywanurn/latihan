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
        
    }
?>  
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
        $pembayaran = $_POST['pembayaran'];
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
        $pembayaran = 0;
        // if ($pembayaran > $biaya) {
        //     $kembalian = $pembayaran - $biaya;
        //     $keterangan = "Terimakasih, uang kembalian : $kembalian";
        //     echo "keterangan : $keterangan";
        // }
        // else if ($pembayaran == $biaya) {
        //     //$kembalian = $pembayaran - $biaya;
        //     $keterangan = "Terimakasih";
        //     echo "keterangan : $keterangan";
        // }
        // else if ($pembayaran < $biaya){
        //     //$kembalian = $pembayaran - $biaya;
        //     $keterangan = "Maaf nama anda di blacklist";
        //     echo "keterangan : $keterangan";
        // }
    }
    ?>              
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
    
        <fieldset>
            <legend>Hitung Biaya Peminjaman Mobil</legend>
            <table border="1">
                <tr>
                    <td colspan="6"><center><b>Data Diri</b></center></td>
                </tr>
                <tr>
                    <td><center><b>Nama</b></center></td>
                    <td><center><b>Nomor Induk Kependudukan</b></center></td>
                    <td><center><b>Jenis Kelamin</b></center></td>
                    <td colspan="2"><center><b>Agama</b></center></td>
                    <td><center><b>Penjamin</b></center></td>
                </tr>
                <tr>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $nik; ?></td>
                    <td><?php echo $jk; ?></td>
                    <td colspan="2"><?php echo $agama; ?></td>
                    <td><?php echo $penjamin; ?></td>
                </tr>
                <tr>
                    <td colspan="6"><center><b>Data Rental Mobil</b></center></td>
                </tr>
                <tr>
                    <td><center><b>Nama Mobil</b></center></td>
                    <td><center><b>Jenis Mobil</b></center></td>
                    <td><center><b>Merk Mobil</b></center></td>
                    <td><center><b>Tanggal Pinjam</b></center></td>
                    <td><center><b>Tanggal Kembali</b></center></td>
                    <td><center><b>Menggunakan Supir</b></center></td>
                </tr>
                <tr>
                    <td><?php echo $namaMobil; ?></td>
                    <td><?php echo $jenisMobil; ?></td>
                    <td><?php echo $merkMobil; ?></td>
                    <td><?php echo $tglPinjam; ?></td>
                    <td><?php echo $tglKembali; ?></td>
                    <td><?php echo $supir; ?></td>
                </tr>
                <tr>
                    <td colspan="6"><center><b>Rincian Biaya</b></center></td>
                </tr>
                <tr>
                    <td colspan="5"><b>Lama Pinjaman</b></td>
                    <td><?php echo $lamaPinjam; ?> Hari</td>
                </tr>
                <tr>
                    <td colspan="5"><b>Biaya Harian</b></td>
                    <td><?php echo $harian; ?></td>
                </tr>
                <tr>
                    <td colspan="5"><b>Telat Mengembalikan</b></td>
                    <td><?php echo $telat; ?> Hari</td>
                </tr>
                <tr>
                    <td colspan="5"><b>Denda harian</b></td>
                    <td>Rp.<?php echo $denda; ?></td>
                </tr>
                <tr>
                    <td colspan="6"><center><b>Total Biaya</b></center></td>
                </tr>
                <tr>
                    <td colspan="5"><b>Total Biaya</b></td>
                    <td>Rp.<?php echo $biaya; ?></td>
                </tr>
                <tr>
                    <td colspan="5"><b>Total Denda</b></td>
                    <td>Rp.<?php echo $totalDenda; ?></td>
                </tr>
                <tr>
                    <td colspan="6"><center><b>Pembayaran</b></center></td>
                </tr>
                <tr>
                    <td colspan="5"><b>Total Pembayaran</b></td>
                    <td>Rp.<?php echo $totalPembayaran; ?></td>
                </tr>
            </table>
            <br>
            <br>    
            <form action="" method="post">   
            Masukan uang anda : <input type="number" name="pembayaran" required><br>
            <input type="submit" name="Input" value="Simpan"><br>
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
        <input type="hidden" name="verTglKembali" value = <?php echo $verTglKembali; ?>>
        <input type="hidden" name="pembayaran" value = <?php echo $pembayaran; ?>>
        <?php
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

        ?>
            </form>
            </fieldset>  
            
    </body>
</html>

            
        
