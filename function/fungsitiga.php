<?php

    // sapaPengunjung("Nurul Huda");
    // sapaPengunjung("Ibnu Zakariyya");
    // sapaPengunjung("Anshori Akbar");

    sapaPengunjung("Nurul Huda", 20);
    function sapaPengunjung ($nama, $jumlahKunjungan) {
        echo "<h1>Halo {$nama}, Selamat datang!</h1>";
        echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";

        if ($jumlahKunjungan > 10) {
            echo "<p>Kami memliki hadiah ebook gratis untuk anda karena anda telah mengunjungi situs kami sebanyak {$jumlahKunjungan} kali</p>";
        }
    }

?>