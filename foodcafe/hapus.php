<?php

include '../konekpdo.php';

$id = $_GET['id'];
$sql = "DELETE FROM foodcafe WHERE id=?";
$row = $koneksi->prepare($sql);

if ($row -> execute(array($id))) {
    echo '<script>alert("Berhasil Hapus Data!");window.location="foodcafe.php"</script>';
} else {
    echo '<script>alert("Gaga Hapus Data!");window.location="foodcafe.php"</script>';
}

?>