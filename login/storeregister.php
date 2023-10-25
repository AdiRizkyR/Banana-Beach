<?php
    //koneksi database
    include '../konekpdo.php';
    //menangkap data yang dikirim dari form

    //menangkap data nama member dari input "nama"
    $nama = $_POST['nama'];

    //menangkap data nama member dari input "alamat"
    $email = $_POST['email'];

    //menangkap data nama member dari input "no.kontak"
    $password = $_POST['sandi'];

    //menangkap data nama member dari input "tanggal_daftar"
    $kontak = $_POST['kontak'];

    $sandi = password_hash ($password, PASSWORD_DEFAULT);

        $data[] = $nama;
        $data[] = $email;
        $data[] = $sandi;
        $data[] = $kontak;

    //mengiput data ke database
    try {
        $store= 'insert into tblusers (FullName, EmailId, Sandi, ContactNo) values(?, ?, ?, ?)';
        $row = $koneksi->prepare($store);

        $row->execute($data);
        echo '<script> alert("Berhasil Registrasi");window.location="login.php"</script>';
    }catch (PDOException $exception){
        // echo '<script> alert("Error:")</script>'.$exception->getMessage;
        if ($exception->errorInfo[0] == 23000) {
            echo '<script> alert("Email sudah terdaftar!");window.location="register.php"</script>';

            return false;
        } else {
            echo $e->getMessage();
            return false;
        }
    }
?>