<?php

include('../koneksi.php');

//get id
$id = $_GET['id_kriteria'];

$query = "DELETE FROM kriteria WHERE id_kriteria = '$id'";

if($koneksi->query($query)) {
    echo "<script>alert('Berhasil menghapus data Kriteria'); window.location.href='kriteria.php' </script>";
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>