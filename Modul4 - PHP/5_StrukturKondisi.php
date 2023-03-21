<?php
$angka1 = 5;
$angka2 = 20;
$hasil = $angka1 + $angka2;
$banding = $angka1 > $angka2;
echo "Hasil dari $angka1 + $angka2 adalah $hasil <br><br>";

if ($banding) {
  echo "$angka1 lebih besar dari $angka2";
} else {
  echo "$angka1 lebih kecil dari $angka2";
}
