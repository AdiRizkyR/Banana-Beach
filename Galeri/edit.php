<?php
    require_once ('../konekpdo.php');
?>

<?php
    session_start();
    if($_SESSION['status'] !="login"){
        header("location:../login/login.php?pesan=belum_login");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Edit Data Galeri</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="../konekpdo.php" />

    <style>
        body{
            font-family: lexend;
        }
    </style>
</head>

<body>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM galeri WHERE id = ?";
    $row = $koneksi -> prepare($sql);
    $row -> execute(array($id));
    $d = $row -> fetch();
    ?>

    <div class="container pt-5">
        <div class="row">
        <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-center bg-primary text-white text-uppercase">
                Tambah Data Galeri
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <br>
                        <br>

                        <input type="hidden" name="id" value="<?php echo $d['id'];?>">

                        <div class="form-group">
                            <label for="">Judul</label> <br>
                            <input type="text" name="nama" placeholder="Masukan Judul" class="form-control" required="required" value="<?php echo $d['nama'];?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">Tanggal</label> <br>
                            <input type="date" name="tanggal" class="form-control" required="required" value="<?php echo $d['tanggal']; ?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">Upload Foto 1</label> <br>
                            <input type="file" name="img1" id="" class="form-control" required="required" value="<?php echo $d['foto2'];?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">Upload Foto 2</label> <br>
                            <input type="file" name="img2" id="" class="form-control" required="required" value="<?php echo $d['foto2'];?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">Upload Foto 3</label> <br>
                            <input type="file" name="img3" id="" class="form-control" required="required" value="<?php echo $d['foto2'];?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <input type="submit" name="update" value="Update" class="btn btn-primary">
                            <a href="galeri.php"><button type="button" class="btn btn-outline-primary">Kembali</button></a>
                        </div>    
                    </form>
                </div>
            </div>
            <div class="col-sm-3"></div>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>

<?php

include 'koneksi.php';

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $file1 = $_FILES['img1']['name'];
    $file2 = $_FILES['img2']['name'];
    $file3 = $_FILES['img3']['name'];

    $query = "UPDATE galeri SET nama='$nama', tanggal='$tanggal', foto1='$file1', foto2='$file2', foto3='$file3' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        move_uploaded_file($_FILES['img1']['tmp_name'], "../gambar/".$_FILES['img1']['name']);
        move_uploaded_file($_FILES['img2']['tmp_name'], "../gambar/".$_FILES['img2']['name']);
        move_uploaded_file($_FILES['img3']['tmp_name'], "../gambar/".$_FILES['img3']['name']);
        echo '<script>alert("Berhasil Update Data");window.location="galeri.php"</script>';
    }
    else {
        echo '<script>alert("Gagal Update Data");window.location="galeri.php"</script>';
    } 
}
