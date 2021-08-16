<?php

//include koneksi database
include('../koneksi.php');

//get data dari form

$merk_laptop       = $_POST['merk_laptop'];
$harga_laptop      = $_POST['harga_laptop'];
$gaming_laptop     = $_POST['gaming_laptop'];
$desain_laptop     = $_POST['desain_laptop'];
$coding_laptop     = $_POST['coding_laptop'];
$office_laptop     = $_POST['office_laptop'];
$link_laptop	   = $_POST['link_laptop'];
$deskripsi_laptop  = $_POST['deskripsi_laptop'];
$status_laptop	   = $_POST['status_laptop'];
$foto_laptop	   = $_FILES['foto_laptop']['name'];


// cek dulu jika ada foto jalankan coding ini
if ($foto_laptop != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'gif', 'JPG'); //ekstensi file foto yang diupload
    $x = explode('.',$foto_laptop); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto_laptop']['tmp_name'];
    $angka_acak = rand(1,999);
    $nama_fotolaptop_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'foto_laptop/'.$nama_fotolaptop_baru); //memindahkan file foto ke folder foto
        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan
        $query = "INSERT INTO laptop (merk_laptop, harga_laptop, gaming_laptop, desain_laptop, coding_laptop, office_laptop, link_laptop, deskripsi_laptop, status_laptop, foto_laptop)
        VALUES ('$merk_laptop', '$harga_laptop', '$gaming_laptop', '$desain_laptop', '$coding_laptop', '$office_laptop', '$link_laptop', '$deskripsi_laptop', '$status_laptop', '$nama_fotolaptop_baru')";
        $result = mysqli_query($koneksi, $query);
        // periksa query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        } else {
            // tampil alert dan akan redirect ke halaman laptop.php
            header("location:laptop.php?alert=berhasil");
        } 
            
        } else {
            // jika file ekstensi tidak sesuai
            header("location:laptop.php?alert=gagal_ekstensi");
        }

} else {
    $query = "INSERT INTO laptop (merk_laptop, harga_laptop, gaming_laptop, desain_laptop, coding_laptop, office_laptop, link_laptop, deskripsi_laptop, status_laptop, foto_laptop) 
    VALUES ('$merk_laptop', '$harga_laptop', '$gaming_laptop', '$desain_laptop', '$coding_laptop', '$office_laptop', '$link_laptop', '$deskripsi_laptop', '$status_laptop', '$nama_fotolaptop_baru')";
    $result = mysqli_query($koneksi, $query);
        // periksa query apakah ada error
    if (!$result) {
    die("Query gagal dijalankan: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    } else {
        // tampil alert dan akan redirect ke halaman laptop.php
        header("location:laptop.php?alert=berhasil");
        
    }
}



?>