<?php
include 'koneksi.php';
include 'bobot_kriteria.php';

$harga_laptop = "BETWEEN " . $_POST['hargaLaptop'];

$gaming_laptop = $desain_laptop = $coding_laptop = $office_laptop = null;
foreach ($bobot_kriteria as $bobot) {

  if (($_POST['gaming'] == $bobot['bobot']) && $bobot['bobot_gaming'])
    $gaming_laptop = $bobot;
  if (($_POST['desain'] == $bobot['bobot']) && $bobot['bobot_desain'])
    $desain_laptop = $bobot;
  if (($_POST['coding'] == $bobot['bobot']) && $bobot['bobot_coding'])
    $coding_laptop = $bobot;
  if (($_POST['office'] == $bobot['bobot']) && $bobot['bobot_office'])
    $office_laptop = $bobot;
}

$query_kriteria = mysqli_query($koneksi, "SELECT * FROM kriteria");
$kriterias = array();
while ($data = mysqli_fetch_array($query_kriteria))
  $kriterias[] = $data;



/**
 * Melakukan Normalisasi Bobot/Perbaikan bobot
 */
foreach ($kriterias as $i => $kriteria) {
  //Melakukan perhitungan nilai relatif bobot awal (wj).
  $kriterias[$i]['wj'] = ($kriteria['jenis_kriteria']  == "Cost" ? -1 : 1) * ($kriteria['bobot'] / array_sum(array_column($kriterias, "bobot")));
}

$query_laptop = mysqli_query($koneksi, "SELECT * FROM laptop WHERE harga_laptop $harga_laptop AND  gaming_laptop = '{$gaming_laptop['bobot_gaming']}' AND desain_laptop = '{$desain_laptop['bobot_desain']}' AND coding_laptop = '{$coding_laptop['bobot_coding']}' AND office_laptop = '{$office_laptop['bobot_office']}' ORDER BY harga_laptop ASC");
$laptops = array();
while ($data_lap = mysqli_fetch_array($query_laptop))
  $laptops[] = $data_lap;

/**
 * Menentukan Vektor S
 */
foreach ($laptops as $i => $laptop) {
  $vektor_harga  = pow(get_bobot_harga($laptop['harga_laptop'], $bobot_harga), $kriterias[0]['wj']);
  $vektor_gaming = pow($_POST['gaming'], $kriterias[1]['wj']);
  $vektor_desain = pow($_POST['desain'], $kriterias[2]['wj']);
  $vektor_coding = pow($_POST['coding'], $kriterias[3]['wj']);
  $vektor_office = pow($_POST['office'], $kriterias[4]['wj']);
  $laptops[$i]["vektor_s"] = $vektor_harga * $vektor_gaming * $vektor_desain * $vektor_coding * $vektor_office;
}
foreach ($laptops as $i => $laptop) {
  $laptops[$i]["vektor_v"] = $laptop['vektor_s'] / array_sum(array_column($laptops, "vektor_s"));
}

function sortByVektorV($a, $b)
{
  return $a['vektor_v'] < $b['vektor_v'];
}
usort($laptops, 'sortByVektorV');
