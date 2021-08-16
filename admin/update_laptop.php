<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
// membuat variabel untuk menampung data dari form
  $id               = $_POST['no_laptop'];
  $merk_laptop      = $_POST['merk_laptop'];
  $harga_laptop     = $_POST['harga_laptop'];
  $gaming_laptop    = $_POST['gaming_laptop'];
  $desain_laptop    = $_POST['desain_laptop'];
  $coding_laptop    = $_POST['coding_laptop'];
  $office_laptop    = $_POST['office_laptop'];
  $link_laptop      = $_POST['link_laptop'];
  $deskripsi_laptop = $_POST['deskripsi_laptop'];
  $status_laptop    = $_POST['status_laptop'];
  $foto_laptop = $_FILES['foto_laptop']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($foto_laptop != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg','JPG','gif'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto_laptop); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto_laptop']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_fotolaptop_baru = $angka_acak.'-'.$foto_laptop; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'foto_laptop/'.$nama_fotolaptop_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE laptop SET merk_laptop = '$merk_laptop', harga_laptop = '$harga_laptop', gaming_laptop = '$gaming_laptop', desain_laptop = '$desain_laptop', coding_laptop = '$coding_laptop', office_laptop = '$office_laptop', link_laptop = '$link_laptop', deskripsi_laptop = '$deskripsi_laptop', status_laptop = '$status_laptop', foto_laptop = '$nama_fotolaptop_baru'";
                    $query .= "WHERE no_laptop = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='laptop.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg, JPG, gif atau png.');window.location='tambah_laptop.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE laptop SET merk_laptop = '$merk_laptop', harga_laptop = '$harga_laptop', gaming_laptop = '$gaming_laptop', desain_laptop = '$desain_laptop', coding_laptop = '$coding_laptop', office_laptop = '$office_laptop', link_laptop = '$link_laptop', deskripsi_laptop = '$deskripsi_laptop', status_laptop = '$status_laptop'";
      $query .= "WHERE no_laptop = '$id'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='laptop.php';</script>";
      }
    }


?>