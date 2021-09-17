<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>latihan 5</title>
    </head>
    <body>
    <fieldset>
            <legend>latihan 5</legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <th>Nama</th>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <th>Nim</th>
                        <td><input type="number" name="nim"></td>
                    </tr>
                    <tr>
                        <th>Mata Kuliah</th>
                        <td><input type="text" name="matkul"></td>
                    </tr>
                    <tr>
                        <th>Nilai</th>
                        <td><input type="number" name="nilai" min=1 max=2></td>
                    </tr>
                    <tr>
                        <th>Nama Dosen</th>
                        <td><input type="text" name="namaDosen"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" value="Simpan" name="Simpan"></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>
<?php

    if(isset($_POST['Simpan'])){
        $namaMhs = $_POST['namaMhs'];
        $nim = $_POST['nim'];
        $matkul = $_POST['matkul'];
        $nilai = $_POST['nilai'];
        $namaDosen = $_POST['namaDosen'];
    
        class Mahasiswa{
            public $namaMhs;
            public $nim;
            public $nilai;

            public function tampilkanNamaMhs(){
                return $_POST['namaMhs'];
            }
            public function tampilkanNim(){
                return $_POST['nim'];
            }
            public function tampilkanNilai(){
                return $_POST['nilai'];
            }
        }

        class Matkul extends Mahasiswa{
            public $namaDosen;
            public $matkul; 

            public function tampilkanNamaMhs(){
                return $_POST['namaDosen'];
            }
            public function tampilkanNim(){
                return $_POST['matkul'];
            }
            public function tampilkanStatus(){
                if ($_POST['nilai'] > 85) {
                    return "grade A";
                }
                else if ($_POST['nilai'] >= 75) {
                    return "grade B";
                }
                else if ($_POST['nilai'] >= 65) {
                    return "grade C";
                }
                else {
                    return "grade D";
                }
                return $this->tampilkanStatus(); 
            }
        }

        $Mhs = new Mahasiswa($namaMhs, $nim, $nilai);
        echo "Nama mahasiswa : " . $Mhs->tampilkanNama() . "<br>";
        
        $Mhs = new Matkul($namaMhs, $nim, $nilai);
        echo "Status : " . $kucing->tampilkanStatus() . "<br>";

    }


?>