<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$no_laptop      = $_POST['no_laptop'];
$merk           = $_POST['merk'];
$nama_alternatif = $_POST['nama_alternatif'];
$bobot_harga 	 = $_POST['bobot_harga'];
$bobot_gaming   = $_POST['bobot_gaming'];
$bobot_desain   = $_POST['bobot_desain'];
$bobot_coding   = $_POST['bobot_coding'];
$bobot_office   = $_POST['bobot_office'];



//query update data ke dalam database berdasarkan ID
$query = "UPDATE bobot_produk SET merk = '$merk', nama_alternatif = '$nama_alternatif', bobot_harga = '$bobot_harga',
bobot_gaming = '$bobot_gaming', bobot_desain = '$bobot_desain', bobot_coding = '$bobot_coding', bobot_office = '$bobot_office' WHERE no_laptop = '$no_laptop'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
   // menampilkan notifikasi
   echo "<script>alert('Berhasil mengubah data bobot Produk'); window.location.href='bobot_produk.php' </script>";
} else {
    // menampilkan notifikasi gagal
   echo "<script>alert('Gagal mengubah data bobot produk'); </script>";
}

?>