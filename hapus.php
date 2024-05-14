<?php
iff (isset($_REQUEST['id'])) {
    include "conn.inc.php";

    $query = "DELETE FROM db_uts388 WHERE uts388 = '$_REQUEST[id]'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
                alert('Data Berhasil Dihapus');window.location='retrieve.php';
                </script>";
    } else {
        echo "<script>
                alert('Data Gagal Dihapus');window.location='retrieve.php';
                </script>";
    } 
    mysqli_close($conn);
}
?>