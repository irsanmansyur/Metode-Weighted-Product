<?php

//include koneksi database
include('../koneksi.php');

//get data dari form

$nama       = $_POST['nama'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$no_hp      = $_POST['no_hp'];
$foto       = $_FILES['foto']['name'];


// cek dulu jika ada foto jalankan coding ini
if ($foto != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'gif', 'JPG'); //ekstensi file foto yang diupload
    $x = explode('.',$foto); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak = rand(1,999);
    $nama_foto_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'foto/'.$nama_foto_baru); //memindahkan file foto ke folder foto
        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan
        $query = "INSERT INTO admin (nama, email, password, no_hp, foto)
        VALUES ('$nama', '$email', '$password', '$no_hp', '$nama_foto_baru')";
        $result = mysqli_query($koneksi, $query);
        // periksa query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        } else {
            // tampil alert dan akan redirect ke halaman profile.php
            header("location:profile.php?alert=berhasil");
        } 
            
        } else {
            // jika file ekstensi tidak sesuai
            header("location:profile.php?alert=gagal_ekstensi");
        }

} else {
    $query = "INSERT INTO admin (nama, email, password, no_hp, foto) 
    VALUES ('$nama', '$email', '$password', '$no_hp', '$nama_foto_baru')";
    $result = mysqli_query($koneksi, $query);
        // periksa query apakah ada error
    if (!$result) {
    die("Query gagal dijalankan: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    } else {
        // tampil alert dan akan redirect ke halaman profile.php
        header("location:profile.php?alert=berhasil");
        
    }
}



?>