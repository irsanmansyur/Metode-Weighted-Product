<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$merk                     = $_POST['merk'];
$nama_alternatif          = $_POST['nama_alternatif'];
$bobot_harga              = $_POST['bobot_harga'];
$bobot_gaming             = $_POST['bobot_gaming'];
$bobot_desain             = $_POST['bobot_desain'];
$bobot_coding             = $_POST['bobot_coding'];
$bobot_office             = $_POST['bobot_office'];

//query insert data ke dalam database
$query = "INSERT INTO bobot_produk (merk, nama_alternatif, bobot_harga, bobot_gaming, bobot_desain, bobot_coding, bobot_office) 
VALUES ('$merk', '$nama_alternatif', '$bobot_harga', '$bobot_gaming', '$bobot_desain', '$bobot_coding', '$bobot_office')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    // menampilkan notifikasi
    echo "<script>alert('Berhasil menambahkan Data'); window.location.href='bobot_produk.php' </script>";
  
} else {
    // menampilkan notifikasi gagal
    echo "<script>alert('Gagal menambahkan Data'); </script>";

}

?>