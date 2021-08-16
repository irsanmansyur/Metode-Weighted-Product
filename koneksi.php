<?php 
 
$koneksi = mysqli_connect("localhost","root","","spkp_laptop");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
