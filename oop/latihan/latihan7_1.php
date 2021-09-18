<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 4</title>
</head>
<body>
        <fieldset>
            <legend>Gofud</legend>
            <form ACTION="latihan7_2.php" METHOD="POST"> 
                <table>
                    <tr>
                        <th>Nama Barang: </th>
                        <td><input type="text" name="namaBrg" required><br></td>
                    </tr>
                    <tr>
                        <th> Harga: </th>
                        <td><input type="text" name="hargaBrg" required><br></td>
                    </tr>
                    <tr>
                        <th> Jumlah Pesanan: </th>
                        <td><input type="number" name="jmlPesanan" required><br></td>
                    </tr>
               
                    <tr>
                        <th>Sistem Pembayaran :</th>
                        <td><select name="Pembayaran" required>
                                <option value="Cash" name="cash"> </option>
                                <option value="M-Bangking" name="mBangking"> </option>
                                <option value="Gopay" name="gopay"> </option>
                                <option value="PickUp" name="pickup"> </option>
                            </select><br></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" name="Simpan" value="Simpan"></td>
                    </tr>
                </table>           
            </form>
        </fieldset>
    </body>
</html>