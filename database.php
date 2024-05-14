<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, $pass);

if (! $conn) {
    echo "Koneksi Error <br>";
}
echo "Koneksi Sukses <br>";

$query = "CREATE DATABASE db_uts388";

if (mysqli_query($conn, $query)) {
    echo "Database Berhasil Dibuat <br>";
} else {
    echo "Error Membuat Database: " . mysqli_error($conn);
}

mysqli_close($conn);

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connect to the database
if (!mysqli_select_db($conn, $dbname)) {
    die("Database selection failed: " . mysqli_connect_error());
}

// Continue with your PHP and MySQL operations
?>