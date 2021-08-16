<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$no_kriteria       = $_POST['no_kriteria'];
$nama_kriteria   = $_POST['nama_kriteria'];
$bobot         = $_POST['bobot'];
$tipe_kriteria   = $_POST['tipe_kriteria'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE kriteria SET nama_kriteria = '$nama_kriteria', bobot = '$bobot',
jenis_kriteria = '$tipe_kriteria' WHERE no_kriteria = '$no_kriteria'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
  // menampilkan notifikasi
  echo "<script>alert('Berhasil mengubah data Kriteria'); window.location.href='kriteria.php' </script>";
} else {
  // menampilkan notifikasi gagal
  echo "<script>alert('Gagal mengubah data produk'); </script>";
}
