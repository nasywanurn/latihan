<?php
    if (isset($_POST['Proses'])) {
        $saran = nlbr($_POST['saran']);
        echo "Kritik / Saran Anda Adalah : <br>";
        echo "<font color=blue><b>$saran</b></font>";
    }
?>