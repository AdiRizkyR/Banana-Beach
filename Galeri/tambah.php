<?php
    session_start();
    if($_SESSION['status'] !="login"){
        header("location:../login/login.php?pesan=belum_login");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Galeri</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <style>
        body{
        font-family: lexend;
        }
    </style>
</head>

<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white text-uppercase">
                        Tambah Data Galeri
                    </div>
                    <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Masukan Judul</label>
                            <input type="text" name="nama" class="form-control" placeholder="Judul Foto" required="required"> <br>
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" required="required"> <br>
                        </div>

                        <div class="form-group">
                            <label>Upload Foto 1</label>
                            <input type="file" name="img1" class="form-control" required="required"> <br>
                        </div>

                        <div class="form-group">
                            <label>Upload Foto 2</label>
                            <input type="file" name="img2" class="form-control" required="required"> <br>
                        </div>

                        <div class="form-group">
                            <label>Upload Foto 3</label>
                            <input type="file" name="img3" class="form-control" required="required"> <br> <br>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary">
                            <a href="galeri.php"><button type="button" class="btn btn-outline-primary">Kembali</button></a>
                        </div> <br>
                    </form>
                </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>
    <script script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {

        include 'koneksi.php';

        $nama = $_POST['nama'];
        $tanggal = $_POST['tanggal'];
        $location = "../gambar/";
        $file1 = $_FILES['img1']['name'];
        $file_tmp1 = $_FILES['img1']['tmp_name'];
        $file2 = $_FILES['img2']['name'];
        $file_tmp2 = $_FILES['img2']['tmp_name'];
        $file3 = $_FILES['img3']['name'];
        $file_tmp3 = $_FILES['img3']['tmp_name'];

        $data1 = [];
        $data1 = [$file1];
        $data2 = [];
        $data2 = [$file2];
        $data3 = [];
        $data3 = [$file3];

        $images1 = implode(' ',$data1);
        $images2 = implode(' ',$data2);
        $images3 = implode(' ',$data3);

        $query = "insert into galeri (nama,tanggal,foto1,foto2,foto3) values ('$nama','$tanggal','$images1','$images2','$images3')";
        $fire = mysqli_query($con,$query);
        
        if($fire) {
            move_uploaded_file($file_tmp1, $location.$file1);
            move_uploaded_file($file_tmp2, $location.$file2);
            move_uploaded_file($file_tmp3, $location.$file3);
            echo "Success!";
        } 
        else {
            echo "Failed!";
        }
    }
?>