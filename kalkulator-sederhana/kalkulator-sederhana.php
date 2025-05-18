<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <div>
        <h2>KALKULATOR</h2>
        <form action="./kalkulator.php" method="get">
            <input type="text" name ="bil1" placeholder ="Masukkan Bilangan Pertama">
            <input type="text" name ="bil2" placeholder ="Masukkan Bilangan Kedua">
            <select name="operasi" id="">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name ="count" value ="Count">
        </form>
    </div>
</body>
</html>