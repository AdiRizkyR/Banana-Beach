<!DOCTYPE html>
<html lang="en">
    <head>
        <br>
        <title>Tambah Member</title>

        <link rel="stylesheet" href="../css/bootstrap.css" />
    </head>
    <body>
        <div class="container mt-5">
            <h2><center>Registrasi</center></h2>
            <hr />
            <br />
            <form method="post" action="storeregister.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama Member Baru.." require>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="example@foo.com" require>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sandi</label>
                    <input type="text" class="form-control" name="sandi" id="exampleInputEmail1" placeholder="" require>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No. Contac</label>
                    <input type="tel" class="form-control" name="kontak" id="exampleInputEmail1" placeholder="" require>
                </div>
                <input type="submit" class="btn btn-primary"value="Simpan">
                <a href="login.php" class="btn btn-outline-primary position-relative">Batal</a>
            </form>
        </div>
    </body>
</html>
