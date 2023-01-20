<?php
include 'koneksi.php';

$id = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$merk = $_POST['merk'];
$deskripsi = $_POST['deskripsi'];
$jumlah_stok = $_POST['jumlah_stok'];

mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', harga='$harga', merk='$merk', deskripsi='$deskripsi', jumlah_stok='$jumlah_stok' WHERE id_produk=$id");
