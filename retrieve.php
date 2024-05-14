<?php
include "conn.inc.php";

$query  = "SELECT * FROM pendaftaran388";
$result = mysqli_query($conn, $query);

echo "<h1>Data Pendaftaran Mahasiswa 2024</h1>";
echo '
<form action="create.php" method="post">
    <input type="submit" value="Tambah Data">
</form>
';
echo "<table cellpadding='5' border='1'>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th>
            <h3>UTS Oleh 2211501388-ATHALLA RAKHA SYAFA'AT</h3>   
        </tr>";
        
$no = 1;
while($rec = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>$no</td>
            <td>$rec[kodedaftar388]</td>
            <td>$rec[nama388]</td>
            <td>$rec[alamat388]</td>
            <td>$rec[nohp388]</td>
            <td>$rec[email388]</td>
            </tr>";

    $no++;             
}
?>
