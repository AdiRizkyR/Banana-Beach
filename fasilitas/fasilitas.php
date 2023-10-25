<?php
    require_once ('../konekpdo.php');
?>

<?php
    session_start();
    if($_SESSION['status'] !="login"){
        header("location:../login/login.php?pesan=belum_login");
    }
?>

<html>
    <head>
        <title>Fasilitas</title>

        <link rel="stylesheet" href="../css/bootstrap.css">

        <style>
            body{
                font-family: lexend;
            }

            .foto img {
                border-radius: 25px;
            }
            
            .fasilitas a{
                text-align: center;
            }

            .fasilitas h3{
                color: black;
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
                    <a class="navbar-brand" href="../beranda.php"><h3>Banana Beach</h3></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav ms-auto">
                                <a class="nav-link active" aria-current="page" href="../beranda.php">Beranda</a>
                                <a class="nav-link active" aria-current="page" href="../berita/berita.php">Berita</a>
                                <a class="nav-link active" aria-current="page" href="../Galeri/galeri.php">Galeri</a>
                                <a class="nav-link active" aria-current="page" href="fasilitas.php"><u>Fasilitas</u></a>
                                <a class="nav-link active" aria-current="page" href="../login/logout.php">Logout</a>
                            </div>
                        </div>
                </div>
            </nav>
            <!-- akhir navbar -->

            <br><br> <br> <br> <br> <br>
            <nav class="navbar bg-light p-3">
                <div class="container-fluid">
                    <a class="navbar-brand"><h2>Fasilitas</h2></a>
                    <form class="d-flex" role="search" action="fasilitas.php" method="get">
                        <input class="form-control me-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>

            <!-- Food&Cafe -->
            <div class="Fasilitas pt-5">
                <br>
                <a href="../foodcafe/foodcafe.php"><h3><center><u>Food&Cafe</u></center></h3></a>
                <br><br>
                <div class="fasilitas">
                    <table border="0" cellspacing="0" cellpadding="5">
                        <?php
                            $batas = 4;
                            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
    
                            $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0; 
                            
                            $previous = $halaman - 1;
                            $next = $halaman + 1;
                            $jml_mhs = "select count(*) as total from foodcafe";
                            $sql2= $koneksi -> prepare($jml_mhs);
                            $sql2-> execute();
                            $get_jumlah = $sql2->fetch();
                            $total_halaman = ceil($get_jumlah['total']/$batas);

                            if(isset($_GET['cari'])){
                            
                                $cari = $_GET['cari'];
                                
                                $sql2 = "select * from foodcafe where nama like '%".$cari."%' or jarak like '%".$cari."%'"; 
                                
                                $row = $koneksi->prepare($sql2);
                                $row->execute();
                            }
                            else {
    
                                $sql = "SELECT * FROM foodcafe LIMIT $halaman_awal,$batas";
                                $row = $koneksi->prepare($sql);
                                $row->execute();

                            }

                            $hasil = $row->fetchAll();
                            $no =1;
                            foreach($hasil as $d) {
                        ?>

                        <tr class="foto">
                            <td rowspan="7"><img src="../gambar/<?php echo $d['foto']?>" alt="" width="380px" height="300px"></td>
                        </tr>

                        <tr>
                            <td><?php echo $d['nama']?></td>
                        </tr>

                        <tr>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                                <?php echo $d['jarak']?>M 
                            </td>
                        </tr>

                        <tr>
                            <td>OPEN</td>
                        </tr>

                        <tr>
                            <td><?php echo $d['buka']?> - <?php echo $d['tutup']?> WIB</td>
                        </tr>

                        <tr>
                            <td><?php echo $d['narasi']?></td>
                        </tr>

                        <tr>
                            <td>
                                <img src="../gambar/ptw.png" alt="" style="width: 30px;">
                                <img src="../gambar/pfb.png" alt="" style="width: 30px;">
                                <img src="../gambar/pig.png" alt="" style="width: 30px;">
                            </td>
                            <td>
                                <img src="../gambar/goofood.png" alt="" style="width: 110px;">
                            </td>
                            
                            <td>
                                <img src="../gambar/grabfood.png" alt="" style="width: 110px;">
                            </td>
                        </tr>
                        
                        <?php
                            }
                        ?>
                    </table>
                    <br> <br>
                    <a href="../foodcafe/foodcafe.php"><p style="text-align: center;">Selengkapnya</p></a>
                </div>
            </div>
            <!-- akhir food&cafe -->

            <!-- Hotel -->
            <div class="Fasilitas pt-5">
                <br> <br>
                <a href="../hotel/hotel.php"><h3><center><u>Hotel</u></center></h3></a>
                <br><br>
                <div class="fasilitas">
                    <table border="0" cellspacing="0" cellpadding="5">
                        <?php
                            $batas = 4;
                            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
    
                            $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0; 
                            
                            $previous = $halaman - 1;
                            $next = $halaman + 1;
                            $jml_mhs = "select count(*) as total from hotel";
                            $sql2= $koneksi -> prepare($jml_mhs);
                            $sql2-> execute();
                            $get_jumlah = $sql2->fetch();
                            $total_halaman = ceil($get_jumlah['total']/$batas); 

                            if(isset($_GET['cari'])){
                            
                                $cari = $_GET['cari'];
                                
                                $sql2 = "select * from hotel where nama like '%".$cari."%' or jarak like '%".$cari."%'"; 
                                
                                $row = $koneksi->prepare($sql2);
                                $row->execute();
                            }
                            else {

                                $sql = "SELECT * FROM hotel LIMIT $halaman_awal,$batas";
                                $row = $koneksi->prepare($sql);
                                $row->execute();

                            }

                            $hasil = $row->fetchAll();
                            $no =1;
                            foreach($hasil as $d) {
                        ?>

                        <tr class="foto">
                            <td rowspan="7"><img src="../gambar/<?php echo $d['foto']?>" alt="" width="380px" height="300px"></td>
                        </tr>

                        <tr>
                            <td><?php echo $d['nama']?></td>
                        </tr>

                        <tr>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                                <?php echo $d['jarak']?>M 
                            </td>
                        </tr>

                        <tr>
                            <td>OPEN RESEVASI</td>
                        </tr>

                        <tr>
                            <td><?php echo $d['buka']?> - <?php echo $d['tutup']?> WIB</td>
                        </tr>

                        <tr>
                            <td><?php echo $d['narasi']?></td>
                        </tr>

                        <tr>
                            <td>
                                <img src="../gambar/ptw.png" alt="" style="width: 30px;">
                                <img src="../gambar/pfb.png" alt="" style="width: 30px;">
                                <img src="../gambar/pig.png" alt="" style="width: 30px;">
                            </td>
                            <td>
                                <img src="../gambar/tiket.png" alt="" style="width: 110px; border-radius: 15px;">
                            </td>
                            
                            <td>
                                <img src="../gambar/traveloka.jpg" alt="" style="width: 100px; height: 33px; border-radius: 15px;">
                            </td>
                        </tr>
                        
                        <?php
                            }
                        ?>
                    </table>
                    <br> <br>
                    <a href="../hotel/hotel.php"><p style="text-align: center;">Selengkapnya</p></a>
                </div>
            </div>
            <!-- akhir hotel -->

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
                            <img src="../gambar/peta.png" alt="">
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

                        <div class="copy">
                            <p>&copy; 2022 Banana Beach</p>
                        </div>

                        <div class="sosmed">
                            <rigth>
                                <img src="../gambar/tw.png" alt="">
                                <img src="../gambar/batas.png" alt="" height="5px">
                                <img src="../gambar/fb.png" alt="">
                                <img src="../gambar/batas.png" alt="" height="5px">
                                <img src="../gambar/ig.png" alt="">
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