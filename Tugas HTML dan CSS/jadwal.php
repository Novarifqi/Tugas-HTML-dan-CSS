<?php

// Baca data acara dari file acara.txt
$dataAcara = file_get_contents('acara.txt');

// Parse data acara dan tampilkan dalam format tabel
echo '<table>';
echo '<tr><th>Tanggal</th><th>Jam</th><th>Judul</th><th>Deskripsi</th></tr>';

$baris = explode("\n", $dataAcara);
foreach ($baris as $acara) {
  $kolom = explode("-", $acara);
  echo '<tr>';
  echo '<td>'.$kolom[0].'</td>';
  echo '<td>'.$kolom[1].'</td>';
  echo '<td>'.$kolom[2].'</td>';
  echo '<td>'.$kolom[3].'</td>';
  echo '</tr>';
}

echo '</table>';

?>
