<?php
include 'koneksi.php';
$query_all_bobot = mysqli_query($koneksi, "SELECT * FROM bobot_kriteria");
$bobot_kriteria = array();
while ($data = mysqli_fetch_array($query_all_bobot))
  $bobot_kriteria[] = $data;


$bobot_game = array_filter($bobot_kriteria, function ($b_kriteria) {
  return ($b_kriteria['bobot_gaming']);
});

$bobot_desain = array_filter($bobot_kriteria, function ($b_kriteria) {
  return ($b_kriteria['bobot_desain']);
});
$bobot_coding = array_filter($bobot_kriteria, function ($b_kriteria) {
  return ($b_kriteria['bobot_coding']);
});
$bobot_office = array_filter($bobot_kriteria, function ($b_kriteria) {
  return ($b_kriteria['bobot_office']);
});




$bobot_harga = [
  1 =>   "< 4.000.000",
  2 =>   "6.500.000 – 7.500.000",
  3 =>   "8.500.000 – 10.000.000",
  4 =>   "12.000.000 – 14.000.000",
  5 =>   "> 15.000.000",
];

$bobot_harga_val = [
  1 =>   "3000000 AND 5999999",
  2 =>   "6000000 AND 8999999",
  3 =>   "9000000 AND 11999999",
  4 =>   "12000000 AND 14999999",
  5 =>   "15000000 AND 79999999",
];

function get_bobot_harga($harga)
{
  if ($harga < 4000000)
    return 1;
  elseif ($harga >= 6500000 && $harga <= 7500000)
    return 2;
  elseif ($harga >= 8500000 && $harga <= 10000000)
    return 3;
  elseif ($harga >= 12000000 && $harga <= 14000000)
    return 4;
  else return 5;
}
