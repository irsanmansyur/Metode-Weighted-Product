<?php
$bobot_game = [
  1 =>  "Game 3D",
  2 =>  "Game Dewasa",
  3 =>  "Game anak – anak",
  4 =>  "Game bawaan Laptop",
  5 =>  "Game Kompetisi"
];
$bobot_desain = [
  1 =>  "Desain 2D",
  2 =>  "Desain 3D",
  3 =>  "Desain Autocad",
  4 =>  "Desain UI/UX",
  5 =>  "Desain Grafis"
];
$bobot_coding = [
  1  => "Coding Anak - anak",
  2  => "Coding Game",
  3  => "Coding Desktop",
  4  => "Coding Android",
  5  => "Coding Website"
];
$bobot_office = [
  4 =>   "Pekerjaan Kantor",
  5 =>   "Pengerjaan Tugas sekolah / kuliah"
];



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
