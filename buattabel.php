<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_uts388';
$conn = mysqli_connect($host, $user, $pass, $db);

if (! $conn) {
    echo "Koneksi Error <br>";
}
echo "Koneksi Sukses <br>";

$query = "CREATE TABLE pendaftaran388 (
           kodedaftar388 VARCHAR(5) PRIMARY KEY,
           nama388 VARCHAR(100),
           alamat388 VARCHAR(100),
           nohp388 VARCHAR(20),
           email388 VARCHAR(100)
        )";

if (mysqli_query($conn, $query)) {
    echo "Tabel Berhasil Dibuat <br>";
} else {
    echo "Error Membuat Tabel: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
