<?php
require '../koneksi.php';
$ambil = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan = '$_GET[id]'");


$koneksi->query("DELETE FROM pemesanan WHERE id_pemesanan = '$_GET[id]'");

echo "<script> location='index.php?halaman=pemesanan'; </script>";
