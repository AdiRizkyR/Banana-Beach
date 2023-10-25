<?php
    require_once ('konekpdo.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            body{
                font-family: lexend;
            }

            .slider h5{
                color: black;
            }

            .slider p{
                color: black;
            }


            .profile1 img{
                width: 469px;
                height: 420;
                float: left;
                margin: 10px 10px 0px 10px;
                border-radius: 25px;
            }

            .profile1 p{
                text-align: justify
            }
            
            .profile2 p{
                text-align: justify
            }

            .profile2 img{
                width: 469px;
                height: 420;
                float: left;
                margin: 10px 10px 0px 10px;
                border-radius: 25px;
            }

            
            .narasi p {
                text-align: justify
            }
            
            .berita img {
                border-radius: 25px;
            }
            
            .berita a{
                text-align: center;
            }
            
            .galeri img{
                border-radius: 25px;
                margin: 25px;
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
                color: white;
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
        <div class="container mt-3 mb-3">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #237CE5; padding-left: 15px; padding-right: 15px;">
                <div class="container p-3">
                    <a class="navbar-brand" href="index.php"><h3>Banana Beach</h3></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav ms-auto">
                                <a class="nav-link active" aria-current="page" href="beranda.php"><u>Beranda</u></a>
                                <a class="nav-link active" aria-current="page" href="berita.php">Berita</a>
                                <a class="nav-link active" aria-current="page" href="galeri.php">Galeri</a>
                                <a class="nav-link active" aria-current="page" href="fasilitas.php">Fasilitas</a>
                                <a class="nav-link active" aria-current="page" href="login/login.php">Login</a>
                            </div>
                        </div>
                </div>
            </nav>
            <!-- akhir navbar -->
        </div>

        <!-- slider -->
        <div class="slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="gambar/pantai1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="gambar/pantai2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="gambar/pantai3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- akhir slider -->

        <br><br><br>

        <div class="container">

            <!-- profile -->
            <h2><u><center>Profile</center></u></h2>
            <br><br><br>
            <div class="profile1">
                <img src="gambar/profile1.png" alt="">
                <br><br><br><br>
                <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></p>
            </div>

            <br><br><br>

            <div class="profile2">
                <img src="gambar/profile2.png" alt="">
                <br><br><br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <!-- akhir profile -->

            <br><br><br><br><br><br>

            <!-- berita -->
            <h2><u><center>Berita</center></u></h2>
            <br><br><br>
            <div class="berita">
                <br>
                <table border="0" cellspacing="0" cellpadding="5">
                    <?php
                        $batas = 3;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;

                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0; 

                        $previous = $halaman - 1;
                        $next = $halaman + 1;
                        $jml_mhs = "select count(*) as total from berita";
                        $sql2= $koneksi -> prepare($jml_mhs);
                        $sql2-> execute();
                        $get_jumlah = $sql2->fetch();
                        $total_halaman = ceil($get_jumlah['total']/$batas);

                        $sql = "SELECT * FROM berita LIMIT $halaman_awal,$batas";
                        $row = $koneksi->prepare($sql);
                        $row->execute();
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
                <br> <br> 
                <a href="berita.php"><p style="text-align: center;">Berita lainnya</p></a>
            </div>
            <!-- akhir berita -->

            <br><br><br><br><br><br>

            <!-- galeri -->
            <h2><u><center>Galeri</center></u></h2>
            <br><br><br>
            <div class="galeri">
                <table border="0" cellspacing="0" cellpadding="5">
                    <?php
                        $batas = 2;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;

                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0; 
                        
                        $previous = $halaman - 1;
                        $next = $halaman + 1;
                        $jml_mhs = "select count(*) as total from galeri";
                        $sql2= $koneksi -> prepare($jml_mhs);
                        $sql2-> execute();
                        $get_jumlah = $sql2->fetch();
                        $total_halaman = ceil($get_jumlah['total']/$batas);

                        $sql = "SELECT * FROM galeri LIMIT $halaman_awal,$batas";
                        $row = $koneksi->prepare($sql);
                        $row->execute();
                        $hasil = $row->fetchAll();
                        $no =1;
                        foreach($hasil as $d) {
                    ?>

                    <tr>
                        <td colspan="3"><?php echo $d['nama']?></td>
                    </tr>

                    <tr>
                        <td colspan="3"><?php echo $d['tanggal']?></td>
                    </tr>

                    <tr>
                        <td><img src="gambar/<?php echo $d['foto1']?>" alt="" width="380px" height="300px"></td>
                        <td><img src="gambar/<?php echo $d['foto2']?>" alt="" width="380px" height="300px"></td>
                        <td><img src="gambar/<?php echo $d['foto3']?>" alt="" width="380px" height="300px"></td>
                    </tr>
                    
                    <?php
                        }
                    ?>
                </table>
                <br> <br> 
                <a href="galeri.php"><p style="text-align: center;">Lainnya</p></a>
            </div>
            <!-- akhir galeri -->

            <br><br><br><br><br><br>

            <!-- fasilitas -->
            <h2><u><center>Fasilitas</center></u></h2>
            <br><br><br>
            <div class="fasilitas">
                <table align="center" style="text-align: center;">
                    <tr>
                        <td><a href="foodcafe.php"><img src="gambar/fc.png" alt=""></a></td>
                        <td></td>
                        <td></td>
                        <td><a href="hotel.php"><img src="gambar/h.png" alt=""></a></td>
                    </tr>

                    <tr>
                        <th>Food & Cafe</th>
                        <td></td>
                        <td></td>
                        <th>Hotel</th>
                    </tr>
                </table>
            </div>
            <!-- akhir fasilitas -->

            <br><br><br><br><br><br>

        </div>

            <!-- footer -->
            <footer>
                <div class="tentang">
                    <div class="container">
                        <br><br><br>
                        <h3><center>Tentang Kami</center></h3>
                        <br><br><br>
                        <div class="narasi">
                            <img src="gambar/peta.png" alt="">
                            <br><br>
                            <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                            <table>
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

                        <div class="copy" style="color: white;">
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
            <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>