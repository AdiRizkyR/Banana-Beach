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
            body{
                font-family: lexend;
            }
        </style>
    </head>

    <body>
        <div class="container pt-5">
            <h2 style="text-align: center;">Tambah Data Hotel</h2>
            <br><br>
            <form action="storehotel.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label >ID Hotel :</label>
                    <input type="text" class="form-control" placeholder="" name="id" required="required" />
                </div>
                <br>
                <div class="form-group">
                    <label >Foto :</label>
                    <input type="file" class="form-control" placeholder="" name="foto" required="required" />
                </div>
                <br>
                <div class="form-group">
                    <label >Nama Hotel :</label>
                    <input type="text" class="form-control" placeholder="" name="nama" required="required" />
                </div>
                <br>
                <div class="form-group">
                    <label >Jarak :</label>
                    <input type="text" class="form-control" placeholder="" name="jarak" required="required" />
                </div>
                <br>
                <div class="form-group">
                    <label >Jam Buka Reservasi :</label>
                    <input type="time" class="form-control" placeholder="" name="buka" required="required" />
                </div>
                <br>
                <div class="form-group">
                    <label >Jam Tutup Reservasi :</label>
                    <input type="time" class="form-control" placeholder="" name="tutup" required="required" />
                </div>
                <br>
                <div class="form-group">
                    <label >Narasi :</label>
                    <textarea name="narasi" id="" cols="141.5" rows="10"></textarea>
                </div>
                <br>
                <input type="submit" name="" value="Simpan" class="btn btn-primary /">
                <a href="hotel.php" class="btn btn-outline-primary">Batal</a>
            </form>
        </div>
    </body>
</html>