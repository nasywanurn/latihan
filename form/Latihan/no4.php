<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 4</title>
</head>
<body>
        <form ACTION="proses_no4.php" METHOD="POST">          
            <br>
            Nama : <input type="text" name="nama" required><br>
            Jenis Kelamin :
            <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
            <input type="radio" name="jk" value="Perempuan" required>Perempuan<br>
            Agama :
            <select name="agama" required>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
            </select><br>
            Golongan :
            <select name="golongan" required>
                <option value="golongan 1" name="A">golongan 1</option>
                <option value="golongan 2" name="B">golongan 2</option>
                <option value="golongan 3" name="C">golongan 3</option>
                <option value="golongan 4" name="D">golongan 4</option>
            </select><br>
            Jam kerja : <input type="number" name="jamKerja"><br>
            <input type="submit" name="Input" value="Input">
        </form>
</body>
</html>