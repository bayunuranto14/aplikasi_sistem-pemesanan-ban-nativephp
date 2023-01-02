<?php
include '../koneksi.php';
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$merk = $_POST['merk'];
$deskripsi = $_POST['deskripsi'];
$jumlah_stok = $_POST['jumlah_stok'];

$query = mysqli_query($koneksi, "update produk set nama_produk='$nama_produk', 'harga='$harga', 'merk='$merk', 'deskripsi='$deskripsi', 'jumlah_stok='$jumlah_stok'");
