<?php
    if (isset($_POST['Input'])) {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $golongan = $_POST['golongan'];
        $jamKerja = $_POST['jamKerja'];


        class Karyawan{
            public $nama;
            public $jk;
            public $agama;

            public function tampilkanNama(){
                return $_POST['nama'];
            }
            public function tampilkanJk(){
                return $_POST['jk'];
            }
            public function tampilkanAgama(){
                return $_POST['agama'];
            }
        }

        class Gaji extends Karyawan{
            public $golongan;
            public $jamKerja;
            public $jamLembur;
            // $gajiPokok = 0;
            // $tunjanganP = 0;
            // $glembur = 0;
            // $pajakPokok = 0;
            // $pajakTunjangan = 0;
            // $pajakLembur = 0;
            // $totalGaji = 0;
            // $jamLembur = 0;
        
            public function tampilkanGolongan(){
                return $_POST['golongan'];
            }

            public function tampilkanJamKer(){
                return $_POST['jamKerja'];
            }

            

       
            public function tampilkanGaPok(){
                if ($golongan == 'golongan 1'){
                    $gajiPokok = 1500000;
                    $tunjanganP = 150000;
            
                }
                elseif ($golongan == 'golongan 2') {
                    $gajiPokok = 2000000;
                    $tunjanganP = 200000;
            
                }
                elseif ($golongan == 'golongan 3') {
                    $gajiPokok = 2500000;
                    $tunjanganP = 250000;
            
                }
                elseif ($golongan == 'golongan 4') {
                    $gajiPokok = 3000000;
                }
            }

            public function tampilkanJamLembur(){
                if ($_POST['jamKerja'] > 173) {
                    $jamLembur = 0; 
                    return $jamLembur = ($this->$jamKerja -  173);
                    // return $glembur = ($this->$jamLembur) * 20000;
                    // return $pajakLembur = 5 / 100 * ($this->$glembur);
                }
                else {
                    return $jamLembur = ($this->$jamKerja - 173);
                    
                } 

               
            }

            public function tampilkanTunPok(){
                if ($golongan == 'golongan 1'){
                    $tunjanganP = 150000;
            
                }
                elseif ($golongan == 'golongan 2') {
                    $tunjanganP = 200000;
            
                }
                elseif ($golongan == 'golongan 3') {
                    $tunjanganP = 250000;
            
                }
                elseif ($golongan == 'golongan 4') {
                    $tunjanganP = 300000;
                }

            }

            public function tampilkanGaji(){
                return ($this->gajiPokok + $this->tunjanganP + $this->glembur);
            }

        }

        $karyawan = new Karyawan($nama, $jk, $agama);
        echo "Nama Karyawan: " . $karyawan->tampilkanNama() . "<br>";
        echo "Jenis Kelamin : " . $karyawan->tampilkanJk() . "<br>";
        echo "Agama : " . $karyawan->tampilkanAgama() . "<br>";
        
        $gaji = new Gaji($golongan, $jamKerja);
        echo "Golongan : " . $gaji->tampilkanGolongan() . "<br>";
        echo "Jam Kerja : " . $gaji->tampilkanJamKer() . "<br>";
        echo "Jam lembur : " . $gaji->tampilkanJamLembur() . "<br>";
        echo "Gaji Pokok : Rp." . $gaji->tampilkanGaPok() . "<br>";
        echo "Gaji Lembur : Rp." . $gaji->tampilkanLembur() . "<br>";
        // echo "Pajak Gaji pokok : Rp." . $gaji->pajakPokok . "<br>";
        // echo "Pajak Gaji lembur : Rp." . $gaji->pajakPokok . "<br>";
        
        // $pajakPokok = 5 / 100 * $gajiPokok;
        // $totalGaji = ($gajiPokok + $tunjanganP + $glembur) - ($pajakPokok + $pajakTunjangan + $pajakLembur);
        // $totalPajak = $pajakPokok + $pajakLembur;
        // echo "total pajak = Rp.$totalPajak <br>";
        echo "Tunjangan Pengabdian = Rp." . $gaji->tampilkanTunPok() . "<br>";
        //$gaji = $totalGaji - $totalPajak;
        echo "gaji diterima = Rp." . $gaji->tampilkanGaji() . "<br>";
        
    }
?>