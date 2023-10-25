<?php
    session_start();
    if($_SESSION['status'] !="login"){
        header("location:../login/login.php?pesan=belum_login");
    }
?>

<html>
    <head>
        <Title>Tambah Berita</Title>
        <link rel="stylesheet" href="../css/bootstrap.css">

        <style>
            body {
                font-family: lexend;
            }
        </style>
    </head>

    <body>
        <div class="container pt-5">
            <h2 style="text-align: center;">Tambah Data Berita</h2>
            <br>
            <form action="storeberita.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label >ID Berita :</label>
                    <input type="text" class="form-control" placeholder="" name="id" required="required" />
                </div>
                <br>
                <div class="form-group">
                    <label >Foto :</label>
                    <input type="file" class="form-control" placeholder="" name="foto" required="required" />
                </div>
                <br>
                <div class="form-group">
                    <label >Judul :</label>
                    <input type="text" class="form-control" placeholder="" name="judul" required="required" />
                </div>
                <br>
                <div class="form-group">
                    <label >Tanggal :</label>
                    <input type="date" class="form-control" placeholder="" name="tanggal" required="required" />
                </div>
                <br>
                <div class="form-group">
                    <label >Narasi :</label>
                    <textarea name="narasi" id="" cols="142" rows="10"></textarea>
                </div>
                <br>
                <input type="submit" name="" value="Simpan" class="btn btn-primary /">
                <a href="berita.php" class="btn btn-outline-primary">Batal</a>
            </form>
        </div>
    </body>
</html>