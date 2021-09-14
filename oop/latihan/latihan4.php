<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP Aritmatika</title>
    </head>
    <body>
        <fieldset>
            <legend>OOP Aritmatika</legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <th>Bil 1</th>
                        <td><input type="number" name="bil1"></td>
                    </tr>
                    <tr>
                        <th>Bil 2</th>
                        <td><input type="number" name="bil2"></td>
                    </tr>  
                    <tr>
                        <th></th>
                        <td><input type="submit" value="Simpan" name="Simpan"></td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($_POST['Simpan'])){
                    $bil1 = $_POST['bil1'];
                    $bil2 = $_POST['bil2'];

                    
                    class Aritmatika {
                        public $bil1;
                        public $bil2;
                        

                        public function penjumlahan()
                        {
                            return ($this->bil1 + $this->bil2);
                        }

                        public function pengurangan()
                        {
                            return ($this->bil1 - $this->bil2);
                        }

                        public function perkalian()
                        {
                            return ($this->bil1 * $this->bil2);
                        }

                        public function pembagian()
                        {
                            return ($this->bil1 / $this->bil2);
                        }

                        public function modulus()
                        {
                            return ($this->bil1 % $this->bil2);
                        }

                       

                        public function __construct($bil1,$bil2)
                        {
                            $this->bil1 = $bil1;
                            $this->bil2 = $bil2;
                        }
                    }

                   
                    $aritmatika = new Aritmatika($bil1, $bil2);

                    echo "Hasil penjumlahan : " . $aritmatika->penjumlahan() . "<br>";
                    echo "Hasil pengurangan : " . $aritmatika->pengurangan() . "<br>";
                    echo "Hasil perkalian : " . $aritmatika->perkalian() . "<br>";
                    echo "Hasil pembagian : " . $aritmatika->pembagian() . "<br>";
                    echo "Hasil modulus : " . $aritmatika->modulus() . "<br>";

                    
                }

            ?>
        </fieldset>
    </body>
</html>