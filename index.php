<?php
if (isset($_POST['submit'])) {
    $vkodedaftar388 = $_POST['vkodedaftar388'];
    $vnama388 = $_POST['vnama388'];
    $valamat388 = $_POST['valamat388'];
    $vnohp388 = $_POST['vnohp388'];
    $vemail388 = $_POST['vemail388'];
    
    include "conn.inc.php";
    $query = "INSERT INTO pendaftaran388 VALUES ('$vkodedaftar388', '$vnama388', '$valamat388', '$vnohp388', '$vemail388')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
                alert('Data Berhasil Diinput);window.location='retrieve.php';
                </script>";           
    } else {
        echo "<script>
                alert('Data Gagal Diinput');window.location='index.php';
                </script>";
    }
    mysqli_close($conn);
} else { 
?>               

<h3><p style='color: red;'>Form Pendaftaran Mahasiswa 2024</p></h3>
<a href='retrieve.php'>Lihat Data</a>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <pre>
Kode Pendaftaran       <input type='text' name='vkodedaftar388'>
Nama                   <input type='text' name='vnama388'>
Alamat                 <input type='text' name='valamat388'>
No HP                  <input type='text' name='vnohp388'>
Email                  <input type='text' name='vemail388'>
<p></p>
                        <input type='submit' name='submit' value='Simpan'>
<h3>UTS Oleh 2211501388-ATHALLA RAKHA SYAFA'AT</h3>
</pre>
</form>

<?php
}
?>