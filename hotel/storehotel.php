<?php 
    include '../konekpdo.php'; 

    $id= $_POST['id'];
    $foto= $_POST['foto'];
    $nama= $_POST['nama'];
    $jarak= $_POST['jarak'];
    $buka= $_POST['buka'];
    $tutup= $_POST['tutup'];
    $narasi= $_POST['narasi'];

    $data[] = $id;
    
    //membuat angka random
    
    $rand= rand();
    
    //mengatur ekstensi yang diperbolehkan
    $ekstensi = array('png', 'jpg','jpeg','gif');
    //mengambil nama file foto yang di upload dan simpan pada variabel $filename
    $filename= $_FILES['foto']['name'];
    //mengambil ukuran file foto yang di upload dan simpan pada variabel $ukuran 
    $ukuran = $_FILES['foto']['size'];
    //mengambil ekstensi file foto yang di upload dan simpan pada variabel $ext 
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    //cek kondisi ekstensi file yang di upload 
    if(!in_array($ext, $ekstensi)) { 
        header("location:hotel.php?alert-gagal_ekstensi"); 
    }else{
        //cek kondisi ukuran file yang di upload 
        if($ukuran < 184487000){
            // simpan file dengan nama (angkarandom_nama file)
            $xx = $rand.'_'.$filename;
            $data[] = $xx;
            
            //pindahkan file yang diupload ke folder image dan ganti nama file 
            move_uploaded_file($_FILES['foto']['tmp_name'], "../gambar/".$xx);
            
        }else{
            
            header("location:hotel.php?alert-gagal_ukuran");
        }

        $data[] = $nama;
        $data[] = $jarak;
        $data[] = $buka;
        $data[] = $tutup;
        $data[] = $narasi;
        
        //input data nim, nama, prodi, jenis kelamin dan nama file foto
        $store= 'insert into hotel values (?,?,?,?,?,?,?)';
        $row = $koneksi->prepare($store);
        $row->execute($data);

            echo '<script>alert("Berhasil Tambah Data");window.location="hotel.php"</script>';
    }
?>