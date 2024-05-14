<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_uts388';
$conn = mysqli_connect($host, $user, $pass, $db);

if (! $conn) {
    echo "Koneksi Error <br>";
}
echo "Koneksi Sukses <br>";

$query = "DROP TABLE db_uts388";

if (mysqli_query($conn, $query)) {
    echo "Tabel Berhasil Dihapus <br>";
} else {
    echo "Error Menghapus Tabel: " . mysqli_error($conn);
}

mysqli_close($conn);
?>