<?php
session_start();
include('../konekpdo.php');
error_reporting(0);

    $email=$_POST['email'];
    $password=$_POST['sandi'];

    try {
        $sql = "SELECT EmailId,Sandi,FullName FROM tblusers WHERE EmailId=:email";

        $query= $koneksi -> prepare($sql);
        $query-> bindParam(':email', $email, PDO::PARAM_STR);

        // $query-> bindParam(':sandi', $password, PDO::PARAM_STR);
        $query-> execute();

        $result=$query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            if (password_verify($password, $result[0]->Sandi))//{
                $_SESSION['login'] = $_POST ['email'];
                $_SESSION['status'] = "login";
                $_SESSION['username'] = $result[0]->FullName;
                $Currentpage = $_SERVER['REQUEST_URI'];

                //jika username dan password valid pada diarahkan ke halaman utama
                echo "<script> document.location = '../beranda.php'; </script>";
            //     return true;
            // } else {
            //     echo '<script>alert("Email atau Password Salah")</script>';
            //     return false;
            //}
        }
    }
    catch (PDOException $exeption){
        echo $exeption->getMessage();
    }
?>