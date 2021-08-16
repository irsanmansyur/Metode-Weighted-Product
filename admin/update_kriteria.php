<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id_kriteria     	= $_POST['id_kriteria'];
$nama_kriteria 	= $_POST['nama_kriteria'];
$namadata         = $_POST['namadata'];
$tipe_kriteria   = $_POST['tipe_kriteria'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE kriteria SET nama_kriteria = '$nama_kriteria', namadata = '$namadata',
tipe_kriteria = '$tipe_kriteria' WHERE id_kriteria = '$id_kriteria'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
   // menampilkan notifikasi
   echo "<script>alert('Berhasil mengubah data Kriteria'); window.location.href='kriteria.php' </script>";
} else {
    // menampilkan notifikasi gagal
   echo "<script>alert('Gagal mengubah data produk'); </script>";
}

?>