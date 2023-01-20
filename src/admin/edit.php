<?php
require 'koneksi.php';
if (isset($_GET['edit'])) {
    $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$_GET[id]'");

    $koneksi->query("UPDATE FROM produk WHERE id_produk = '$_GET[id]'");

    echo "<script> location='index.php?halaman=produk'; </script>";
}
