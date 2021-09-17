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
            <legend>latihan 2</legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <th>Nama kucing</th>
                        <td><input type="text" name="namaKucing"></td>
                    </tr>
                    <tr>
                        <th>Warna kucing</th>
                        <td><input type="text" name="warnaKucing"></td>
                    </tr>
                    <tr>
                        <th>kaki kucing</th>
                        <td><input type="number" name="kakiKucing" min=3 max=5></td>
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
        $namaKucing = $_POST['namaKucing'];
        $warnaKucing = $_POST['warnaKucing'];
        $kakiKucing = $_POST['kakiKucing'];
 
        class Kucing{
           
            public $namaKucing;
            public $warnaKucing;
            public $kakiKucing;

            public function tampilkanNama(){
                return $_POST['namaKucing'];
            }

            public function tampilkanWarna(){
                return $_POST['warnaKucing'];
            }

            public function kaki(){
                if ($_POST['kakiKucing'] == 3) {
                    return "Kucing cingked";
                }
                else if ($_POST['kakiKucing'] == 4) {
                    return "kucing normal";
                }
                else {
                    return "siluman kucing";
                }
                return $this->kaki();
            }
        }

        $kucing = new Kucing($namaKucing, $warnaKucing, $kakiKucing);
        echo "Nama Kucing : " . $kucing->tampilkanNama() . "<br>";
        echo "Warna Kucing : " . $kucing->tampilkanWarna() . "<br>";
        echo "Kaki Kucing : " . $kucing->kaki() . "<br>";
    }
?>