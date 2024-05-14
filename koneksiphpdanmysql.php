<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, $pass);

if (mysqli_connect_errno()) {
    echo "Koneksi Error: ". mysqli_connect_error();
    exit();
}

echo 'Koneksi Sukses';
mysqli_close($conn);
?>