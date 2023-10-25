<?php

include '../konekpdo.php';

?>

<?php
    session_start();
    if($_SESSION['status'] !="login"){
        header("location:../login/login.php?pesan=belum_login");
    }
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Update Data</title>
</head>
<body>
    <?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM foodcafe WHERE id=?";
    $row = $koneksi -> prepare($sql);
    $row -> execute(array($id));
    $d = $row ->fetch();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white text-uppercase fw-bold">
                        Update Data Food & Cafe
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <a href="foodcafe.php" class="btn btn-danger">Kembali</a>
                            <br>
                            <input type="hidden" name="id" value="<?php  echo $d['id']; ?>">
                            <br>
                            <br>
                            <div class="form group">
                                <label>Upload Foto</label>
                                <input type="file" name="foto" class="form-control" require="required" value="<?php echo $d['foto']; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Nama Cafe</label>
                                <input type="text" name="nama" class="form-control" require="required" value="<?php echo $d['nama']; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Jarak</label>
                                <input type="text" name="jarak" class="form-control" require="required" value="<?php echo $d['jarak']; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Buka</label>
                                <input type="time" name="buka" class="form-control" require="required" value="<?php echo $d['buka']; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Tutup</label>
                                <input type="time" name="tutup" class="form-control" require="required" value="<?php echo $d['tutup']; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Narasi</label>
                                <input type="textarea" name="narasi" class="form-control" require="required" value="<?php echo $d['narasi']; ?>" rows="4" cols="50">
                            </div>
                            <br>
                            <br>
                            <input type="submit" name="simpan" class="btn btn-success" value="Simpan" >
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

    $query = "UPDATE foodcafe SET foto='$foto', nama='$nama', jarak='$jarak', buka='$buka', tutup='$tutup', narasi='$narasi' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        move_uploaded_file($_FILES['foto']['tmp_name'], "../gambar/".$_FILES['foto']['name']);
        echo '<script>alert("Berhasil Update Data!");window.location="foodcafe.php"</script>';
    }
    else {
        echo '<script>alert("Gagal Update Data!");window.location="foodcafe.php"</script>';
    }
}

?>