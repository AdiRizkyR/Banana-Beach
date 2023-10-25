<?php
    //koneksi database
    include '../konekpdo.php';

    //untuk hapus data barang berdasarkan id buku
    $id = $_GET['id'];
    $sql = "DELETE FROM hotel WHERE id= ?";
    $row = $koneksi->prepare($sql);

    if ($row->execute(array($id))) {
        echo '<script>alert("berhasil hapus data");window.location="hotel.php"</script>';
    }

    else {
        echo '<script>alert("gagal hapus data");window.location="hotel.php"</script>';
    }
?>