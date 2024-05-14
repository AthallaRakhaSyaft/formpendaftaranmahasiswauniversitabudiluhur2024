<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, $pass);

if (! $conn) {
    echo "Koneksi Error <br>";
}
echo "Koneksi Sukses <br>";

$query = "DROP DATABASE db_uts388";

if (mysqli_query($conn, $query)) {
    echo "Database Berhasil Dihapus <br>";
} else {
    echo "Error Menghapus Database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>