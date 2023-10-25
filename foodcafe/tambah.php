<?php
    session_start();
    if($_SESSION['status'] !="login"){
        header("location:../login/login.php?pesan=belum_login");
    }
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Tambah Data</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white text-uppercase fw-bold">
                        Tambah Data Food & Cafe
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <a href="foodcafe.php" class="btn btn-danger">Kembali</a>
                            <br>
                            <br>
                            <label>ID</label>
                            <input type="text" name="id" class="form-control" require="required" placeholder="Masukkan ID">
                            <br>
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control" require="required">
                            <br>
                            <label>Nama Cafe</label>
                            <input type="text" name="nama" class="form-control" require="required" placeholder="Cafe Anda">
                            <br>
                            <label>Jarak Cafe</label>
                            <input type="text" name="jarak" class="form-control" require="required" placeholder="Jarak Cafe Anda">
                            <br>
                            <label>Waktu Cafe Buka</label>
                            <input type="time" name="buka" class="form-control" require="required" placeholder="Jadwal Buka">
                            <br>
                            <label>Waktu Cafe Tutup</label>
                            <input type="time" name="tutup" class="form-control" require="required" placeholder="Jadwal Tutup">
                            <br>
                            <label>Narasi</label>
                            <textarea type="text" name="narasi" class="form-control" require="required" placeholder="Narasi Cafe Anda" rows="4" cols="50"></textarea>
                            <br>
                            <br>
                            <input type="submit" name="simpan" class="btn btn-primary" value="Tambah">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jarak = $_POST['jarak'];
    $buka = $_POST['buka'];
    $tutup = $_POST['tutup'];
    $narasi = $_POST['narasi'];
    $foto = $_FILES['foto']['name'];

    $query = "insert into foodcafe (id,foto,nama,jarak,buka,tutup,narasi) values ('$id','$foto','$nama','$jarak','$buka','$tutup','$narasi')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        move_uploaded_file($_FILES['foto']['tmp_name'], "../gambar/".$_FILES['foto']['name']);
        echo '<script>alert("Berhasil Tambah Data!");window.location="foodcafe.php"</script>';
    }
    else {
        echo '<script>alert("Gagal Tambah Data!");window.location="foodcafe.php"</script>';
    }
}

?>