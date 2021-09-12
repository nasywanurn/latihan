<html>
    <head><title>Pengolahan form</title></head>
    <body>
        <form ACTION="" METHOD="POST" NAME="INPUT">
            Nama Anda : <input type="text" name="nama"><br>
            <input type="submit" name="Input" value="Input">
</form>
    </body>
</html>

<?php
    if (isset($_POST['Input'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda : <b>$nama</b>";
    }
?>