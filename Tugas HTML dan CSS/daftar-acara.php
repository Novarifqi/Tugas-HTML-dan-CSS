<?php

// Ambil data acara dari formulir
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

// Proses data acara (misalnya simpan ke file teks)

// Contoh: Simpan ke file acara.txt
$acara = "$tanggal - $jam - $judul - $deskripsi\n";
file_put_contents('acara.txt', $acara, FILE_APPEND);

// Arahkan pengguna kembali ke halaman index.html
header('Location: index.html');

?>
