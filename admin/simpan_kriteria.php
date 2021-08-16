<?php

//include koneksi database
include('../koneksi.php');

//get data dari form

$nama_kriteria              = $_POST['nama_kriteria'];
$jenis_kriteria             = $_POST['jenis_kriteria'];
$bobot             = $_POST['bobot'];

//query insert data ke dalam database
$query = "INSERT INTO kriteria (nama_kriteria, jenis_kriteria,bobot) 
VALUES ('$nama_kriteria', '$jenis_kriteria',$bobot)";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($koneksi->query($query)) {

  // menampilkan notifikasi
  echo "<script>alert('Berhasil menambahkan Data'); window.location.href='kriteria.php' </script>";
} else {
  // menampilkan notifikasi gagal
  echo "<script>alert('Gagal menambahkan Data'); </script>";
}
