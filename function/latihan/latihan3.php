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
            <legend>Fungsi - Input Biodata</legend>
            <form action="" method="POST">
                <table>
                    <tr>
                        <th>Nama </th>  
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin </th>
                        <td>
                            <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
                            <input type="radio" name="jk" value="Perempuan" required>Perempuan
                        </td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir </th>
                        <td><input type="date" name="tglLahir" required></td>
                    </tr>
                    <tr>
                        <th>Agama </th>
                        <td>
                            <select name="agama" required>
                                <!-- <option value="Islam">Pilih Agama</option> -->
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </td>
                    </tr> 
                    <tr>
                        <th> Alamat </th>
                        <td><textarea name="alamat" required></textarea></td>
                    </tr> 
                    <tr>
                        <th>Hobi</th>
                        <td>
                            <input type="checkbox" name="hobi[]" value="Membaca"> Membaca 
                            <input type="checkbox" name="hobi[]" value="Menggambar" > Menggambar 
                            <input type="checkbox" name="hobi[]" value="Main Game" > Main Game 
                            <input type="checkbox" name="hobi[]" value="Main Bola"> Main Bola 
                            <input type="checkbox" name="hobi[]" value="Bernyanyi" > Bernyanyi 
                            <input type="checkbox" name="hobi[]" value="Menulis" > Menulis <br>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" name="Pilih" value="Simpan"></td>
                    </tr>
                </table>
            </form>
        <!-- </fieldset> -->
        <br>

            <?php
                if(isset($_POST['Pilih'])){
                    $nama = $_POST['nama'];
                    $jk = $_POST['jk'];
                    $tglLahir = $_POST['tglLahir'];
                    $agama = $_POST['agama'];
                    $alamat = $_POST['alamat'];
                    //$hobi = $_POST['hobi'];
                    $hobi = implode(", ", $_POST['hobi']);

                    // tampilBiodata($nama, $jk, $tglLahir, $agama, $alamat, $hobi);

                }

                function tampilBiodata($nama = "", $jk = "", $tglLahir = "", $agama = "", $alamat = "", $hobi = "")
                {
                    $hasil = "Nama : $nama <br>";
                    $hasil .= "Jenis Kelamin : $jk <br>";
                    $hasil .= "Tanggal Lahir : $tglLahir <br>";
                    $hasil .= "Agama : $agama <br>";
                    $hasil .= "Alamat : $alamat <br>";
                    $hasil .= "Hobi : $hobi <br>";
                    return $hasil;
                }
                echo "<br>";
                echo tampilBiodata($nama, $jk, $tglLahir, $agama, $alamat, $hobi);
            //}
            ?>

        </fieldset>
    </body>
</html>

