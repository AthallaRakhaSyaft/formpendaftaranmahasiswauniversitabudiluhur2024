<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_uts388';
$conn = mysqli_connect($host, $user, $pass, $db);

if (! $conn) {
    echo "Koneksi Error: ". mysqli_connect_error();
    exit();
}
?>