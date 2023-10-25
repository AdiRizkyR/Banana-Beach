<?php
include '../konekpdo.php';

$id = $_GET['id'];
$sql = "DELETE FROM galeri WHERE id= ?";
$row = $koneksi -> prepare($sql);

if ($row -> execute(array($id))) {
    echo '<script>alert("Berhasil Hapus Data");window.location="galeri.php"</script>';
}
else {
    echo '<script>alert("Gagal Hapus Data");window.location="galeri.php"</script>';
}
?>