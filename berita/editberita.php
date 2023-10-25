<?php
    include '../konekpdo.php'
?>

<?php
    session_start();
    if($_SESSION['status'] !="login"){
        header("location:../login/login.php?pesan=belum_login");
    }
?>

<html>
    <head>
        <Title>Edit Berita</Title>
        <link rel="stylesheet" href="../css/bootstrap.css">

        <style>
            body{
                font-family: lexend;
            }
        </style>
    </head>

    <body>
        <div class="container pt-5">
            <h2 style="text-align: center;">Edit Data Berita</h2>
            <br>
            <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM berita WHERE id= ?";
                $row = $koneksi->prepare($sql);
                $row->execute(array($id));
                $d = $row->fetch();
            ?>

            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" class="form-control" placeholder="" name="id" value="<?php echo $d['id']; ?>" />
                </div>
                <br>
                <div class="form-group">
                    <label >Foto :</label>
                    <input type="file" class="form-control" placeholder="" name="foto" value="<?php echo $d['foto']; ?>" />
                </div>
                <br>
                <div class="form-group">
                    <label >judul :</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama" name="judul" value="<?php echo $d['judul']; ?>" />
                </div>
                <br>
                <div class="form-group">
                    <label >Tanggal :</label>
                    <input type="date" class="form-control" placeholder="" name="tanggal" value="<?php echo $d['tanggal']; ?>" />
                </div>
                <br>
                <div class="form-group">
                    <label >Narasi :</label>
                    <textarea name="narasi" id="" value="<?php echo $d['narasi']; ?>" cols="142" rows="10"></textarea>
                </div>
                <br>
                <input type="submit" name="update" value="Update" class="btn btn-primary /">
                <a href="berita.php" class="btn btn-outline-primary position-relative">Batal</a>
            </form>
        </div>
    </body>
</html>

<?php

include 'koneksi.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $narasi = $_POST['narasi'];
    $foto = $_FILES['foto']['name'];

    $query = "UPDATE berita SET foto='$foto',judul='$judul',tanggal='$tanggal',narasi='$narasi' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        move_uploaded_file($_FILES['foto']['tmp_name'],"../gambar/".$_FILES['foto']['name']);
        echo '<script>alert("Berhasil Update Data!");window.location="berita.php"</script>';
    } else {
        echo '<script>alert("Gagal Update Data!");window.location="berita.php"</script>';
    }
}

?>