<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = $_GET["name"];
        $email = $_GET["email"];
        $password = $_GET["password"];

        echo "Nama, Email, dan Password berhasil disimpan!\n";
        echo "<br><br>";
        echo "Informasi Form:\n";
        echo "<br>";
        echo "Nama: $name\n";
        echo "<br>";
        echo "Email: $email\n";
    } else {
        echo "Akses anda salah!";
    }
?>