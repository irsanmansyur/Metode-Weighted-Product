<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include "koneksi.php";



$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$cek_login = mysqli_query($koneksi, "SELECT * FROM admin WHERE email = '".$email."' AND password = '".$password."'");
    if (mysqli_num_rows($cek_login) > 0) {
          $panggil = mysqli_fetch_object($cek_login);
          $_SESSION['statuslogin'] = true;
          $_SESSION['admin_global'] = $panggil;
          $_SESSION['no'] = $panggil->no_admin;
          echo "<script>alert('Anda Berhasil login ke halaman admin!'); window.location.href='admin/index.php' </script>";
        }else{
            echo "<script>alert('Username atau password anda salah!')</script>";
    }                                  

                                                
?>