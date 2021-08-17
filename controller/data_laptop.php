<?php
include 'koneksi.php';


$batas = isset($_GET['perpage']) ?  (int) $_GET['perpage'] : 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$total_query = mysqli_query($koneksi, "select * from laptop");
$jumlah_data = mysqli_num_rows($total_query);
$total_halaman = ceil($jumlah_data / $batas);

$query_all_laptop = mysqli_query($koneksi, "SELECT * FROM laptop limit $halaman_awal, $batas");
$laptops = array();
while ($data = mysqli_fetch_array($query_all_laptop))
  $laptops[] = $data;
$nomor = $halaman_awal + 1;
