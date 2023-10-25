<!DOCTYPE html>
<html>
    <head>
        <title>Login Register PDO</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>

    <body>
        <div class="container mt-5">
            <h2 align="center">Please Login</h2>
            <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){
                        echo "Login gagal! username dan password salah!";
                    } else if($_GET['pesan'] == "logout"){
                        echo "Anda telah berhasil logout";
                    }
                }
            ?>

            <form method="post" action="cek_login.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="sandi" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
        </div>
    </body>
</html>