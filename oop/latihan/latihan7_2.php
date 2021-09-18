<?php

    // pesanan > 150 ribu discount 10%
    // pesanan > 250 ribu discount 15%
    /* output namabarang, harga, jumlah pesanan, jenis pembayaran,
    diskon, cashback jumlah yang harus dibayar
    */

    if(isset($_POST['Simpan'])){
        $namaBrg = $_POST['namaBrg'];
        $hargaBrg = $_POST['hargaBrg'];
        $jmlPesanan = $_POST['jmlPesanan'];
        $Pembayaran = $_POST['Pembayaran'];

        class Data{
            public $namaBrg;
            public $hargaBrg;
            public $jmlPesanan;
            public $Pembayaran;

            public function tampilkanNamaBrg(){
                return $_POST['namaBrg'];
            }
            public function tampilkanHargaBrg(){
                return $_POST['hargaBrg'];
            }
            public function tampilkanjmlPesanan(){
                if ($_POST['jmlPesanan'] >= 150000) {
                    return $this->$hargaBrg - 0.1;
                }
                elseif ($_POST['jmlPesanan'] >= ) {
                    return $this->$hargaBrg - 1.5;
                }
            }
            public function tampilkanPembayaran(){
                if ($_POST['Pembayaran'] == $cash) {
                    return $cashback = 0;
                }
                elseif ($_POST['Pembayaran'] == $mBangking) {
                    return $discount = 2.5;
                }
                elseif ($_POST['Pembayaran'] == $gopay) {
                    return $cashback = 0.1;
                }
                elseif ($_POST['Pembayaran'] == $pickup) {
                    return $discount = 1.5;
                }

            }

        }
    }

?>