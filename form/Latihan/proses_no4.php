<?php
    if (isset($_POST['Input'])) {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $golongan = $_POST['golongan'];
        $jamKerja = $_POST['jamKerja'];

        $gajiPokok = 0;
        $tunjanganP = 0;
        $glembur = 0;
        $pajakPokok = 0;
        $pajakTunjangan = 0;
        $pajakLembur = 0;
        $totalGaji = 0;
        $jamLembur = 0;

       

        if ($golongan == 'golongan 1'){
            $gajiPokok = 1500000;
            $tunjanganP = 150000;
         // $pajakPokok = 5 / 100 * $gajiPokok;
        }
        elseif ($golongan == 'golongan 2') {
            $gajiPokok = 2000000;
            $tunjanganP = 200000;
         // $pajakPokok = 5 / 100 * $gajiPokok;
        }
        elseif ($golongan == 'golongan 3') {
            $gajiPokok = 2500000;
            $tunjanganP = 250000;
         // $pajakPokok = 5 / 100 * $gajiPokok;
        }
        elseif ($golongan == 'golongan 4') {
            $gajiPokok = 3000000;
            $tunjanganP = 300000;
            $pajakPokok = 5 / 100 * $gajiPokok;
         // $pajakTunjangan = 5 / 100 * $tunjanganP;
        }

        if ($jamKerja > 173) {
            $jamLembur = $jamKerja -  173;
            $glembur = $jamLembur * 20000;
            $pajakLembur = 5 / 100 * $glembur;
        }
        else {
            $glembur;
            // $pajaklembur = "-";
        } 
        echo "Nama = $nama <br>";
        echo "Jenis Kelamin = $jk <br>";
        echo "Agama = $agama <br>";
        echo "Golongan = $golongan<br>";
        echo "jumlah jam kerja = $jamKerja <br>";
        echo "jam lembur = $jamLembur <br>";
        echo "Gaji Pokok = Rp.$gajiPokok <br>";
        echo "Gaji Lembur = Rp.$glembur <br>";
        $pajakPokok = 5 / 100 * $gajiPokok;
        echo "Pajak gaji pokok = Rp.$pajakPokok <br>";
        echo "Pajak lembur = Rp.$pajakLembur <br>";
        $totalGaji = ($gajiPokok + $tunjanganP + $glembur) - ($pajakPokok + $pajakTunjangan + $pajakLembur);
        $totalPajak = $pajakPokok + $pajakLembur;
        echo "total pajak = Rp.$totalPajak <br>";
        echo "Tunjangan Pengabdian = Rp.$tunjanganP <br>";
        $gaji = $totalGaji - $totalPajak;
        echo "gaji diterima = Rp.$gaji";
        
    }
?>