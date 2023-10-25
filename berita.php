<?php
    require_once ('konekpdo.php');
?>

<html>
    <head>
        <title>Berita</title>

        <link rel="stylesheet" href="css/bootstrap.css">

        <style>
            body{
                font-family: lexend;
            }

            .berita img {
                border-radius: 25px;
            }
            
            .berita a{
                text-align: center;
            }

            .tentang {
                background-color: black;
                color: white;
            }

            .narasi img{
                width: 520px;
                height: 301px;
                float: left;
                margin: 10px 10px 0px 10px;
                border-radius: 25px;
            }

            .copy {
                text-align: right;
            }

            .sosmed img {
                width: 30px;
                float: right;
            }

            .takpenting {
                color: black;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #237CE5; padding-left: 15px; padding-right: 15px;">
                <div class="container p-3">
                    <a class="navbar-brand" href="index.php"><h3>Banana Beach</h3></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav ms-auto">
                                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                                <a class="nav-link active" aria-current="page" href="berita.php"><u>Berita</u></a>
                                <a class="nav-link active" aria-current="page" href="galeri.php">Galeri</a>
                                <a class="nav-link active" aria-current="page" href="fasilitas.php">Fasilitas</a>
                                <a class="nav-link active" aria-current="page" href="login/login.php">Login</a>
                            </div>
                        </div>
                </div>
            </nav>
            <!-- akhir navbar -->

            <!-- berita -->
            <div class="Berita pt-5">
                <br> <br> <br> <br> <br>
                <nav class="navbar bg-light p-3">
                        <div class="container-fluid">
                            <a class="navbar-brand"><h2>Berita</h2></a>
                            <form class="d-flex" role="search" action="berita.php" method="get">
                                <input class="form-control me-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                <br><br><br>
                <div class="berita">
                    <br> <br>
                    <table border="0" cellspacing="0" cellpadding="5">
                        <?php
                            $batas = 5;
                            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                            
                            $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0; 
                            
                            $previous = $halaman - 1;
                            $next = $halaman + 1;
                            $jml_mhs = "select count(*) as total from berita";
                            $sql2= $koneksi -> prepare($jml_mhs);
                            $sql2-> execute();
                            $get_jumlah = $sql2->fetch();
                            $total_halaman = ceil($get_jumlah['total']/$batas);
                            
                            if(isset($_GET['cari'])){
                            
                                $cari = $_GET['cari'];
                                
                                $sql2 = "select * from berita where judul like '%".$cari."%' or tanggal like '%".$cari."%'"; 
                                
                                $row = $koneksi->prepare($sql2);
                                $row->execute();
                            }
                            else {

                                $sql = "SELECT * FROM berita LIMIT $halaman_awal,$batas";
                                $row = $koneksi->prepare($sql);
                                $row->execute();

                            }
                            $hasil = $row->fetchAll();
                            $no =1;
                            foreach($hasil as $d) {
                        ?>

                        <tr>
                            <td rowspan="5"><img src="gambar/<?php echo $d['foto']?>" alt="" width="380px" height="300px"></td>
                        </tr>

                        <tr>
                            <td><?php echo $d['judul']?></td>
                        </tr>

                        <tr>
                            <td><?php echo $d['tanggal']?></td>
                        </tr>

                        <tr>
                            <td><?php echo $d['narasi']?></td>
                        </tr>

                        <tr>
                            <td><a href="#">Baca Selengkapnya</a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
                <br><br>
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" <?php if($halaman > 1){echo "href='?halaman=$previous'"; } ?>>Previous</a>
                        </li>
                        
                        <?php
                            for($x=1;$x<=$total_halaman;$x++){
                        ?>

                        <li class="page-item">
                            <a class="page-link" href="?halaman=<?php echo $x ?>">
                                <?php
                                    echo $x;
                                ?>
                            </a>
                        </li>

                        <?php 
                            }
                        ?>

                        <li class="page-item">
                            <a class="page-link" <?php if($halaman < $total_halaman) {echo "href='?halaman=$next'"; } ?>>Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- akhir berita -->

        </div>

        <!-- footer -->
        <br> <br> <br> <br>
        <footer>
                <div class="tentang">
                    <div class="container">
                        <br><br><br>
                        <h3><center>Tentang Kami</center></h3>
                        <br><br><br>
                        <div class="narasi">
                            <img src="gambar/peta.png" alt="">
                            <br><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                            <table style="color: white;">
                                <tr>
                                    <td><b>Kontak</b></td>
                                </tr>

                                <tr>
                                    <td>No. Telp</td>
                                    <td>: 08527438xxxx</td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td>: bananabeach@foo.com</td>
                                </tr>
                            </table>
                        </div>

                        <br><br><br>

                        <h4>Banana Beach</h4>

                        <div class="copy" >
                            <p>&copy; 2022 Banana Beach</p>
                        </div>

                        <div class="sosmed">
                            <rigth>
                                <img src="gambar/tw.png" alt="">
                                <img src="gambar/batas.png" alt="" height="5px">
                                <img src="gambar/fb.png" alt="">
                                <img src="gambar/batas.png" alt="" height="5px">
                                <img src="gambar/ig.png" alt="">
                            </rigth>
                        </div>
                    </div>

                    <div class="takpenting">
                        <p>a</p>
                        <p>a</p>
                    </div>
                </div>
            </footer>
            <!-- akhir footer -->
    </body>
</html>