<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>
</head>
<body>
    <form action="hal_dua.php" method="post">
        <fieldset>
        <legend>Rental Mobil</legend>
        Nama : <input type="text" name="nama" required><br>
        Nomor Induk Keluarga : <input type="number" name="nik" required><br>
        Jenis Kelamin :
        <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
        <input type="radio" name="jk" value="Perempuan" required>Perempuan<br>
        Agama :
        <select name="agama" required>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
        </select><br>
        Nama Mobil : <input type="text" name="namaMobil" required><br>
        Jenis Mobil :
        <select name="jenisMobil" required>
            <option value="Sedan">Sedan</option>
            <option value="SUV">SUV</option>
            <option value="MPV">MPV</option>
            <option value="Sport">Sport</option>
        </select><br>
        Merk Mobil :
        <select name="merkMobil" required>
            <option value="Honda">Honda</option>
            <option value="Toyota">Toyota</option>
            <option value="Mazda">Mazda</option>
            <option value="Mitsubishi">Mitsubishi</option>
        </select><br>
        <!-- No plat mobil : <input type="text" name="platMobil" required><br> -->
        tanggal peminjaman : <input type="date" name="tglPinjam" required><br>
        tanggal kembali : <input type="date" name="tglKembali" required><br>
        Penjamin :
        <select name="penjamin" required>
            <option value="fotocopy KTP">fotocopy KTP</option>
            <option value="fotocopy SIM">fotocopy SIM</option>
            <option value="fotocopy KK">fotocopy KK</option>
            <option value="Buku Nikah">Buku Nikah</option>
        </select><br>
        Supir :
        <select name="supir" required>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
            <!--option value=""></option-->
        </select><br>
        <input type="submit" name="Input" value="Input">
        <input type="reset" name="Reset" value="Reset">
        </fieldset>
    </form>
</body>
</html>