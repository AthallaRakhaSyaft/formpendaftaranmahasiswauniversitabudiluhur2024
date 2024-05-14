<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, $pass);

if (! $conn) {
    echo "Koneksi Error <br>";
}
echo "Koneksi Sukses <br>";

mysqli_select_db($conn, 'db_uts388');

mysqli_close($conn);
?>