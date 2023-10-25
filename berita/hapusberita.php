<?php
    //koneksi database
    include '../konekpdo.php';

    //untuk hapus data barang berdasarkan id buku
    $id = $_GET['id'];
    $sql = "DELETE FROM berita WHERE id= ?";
    $row = $koneksi->prepare($sql);

    if ($row->execute(array($id))) {
        echo '<script>alert("berhasil hapus data");window.location="berita.php"</script>';
    }

    else {
        echo '<script>alert("gagal hapus data");window.location="berita.php"</script>';
    }
?>