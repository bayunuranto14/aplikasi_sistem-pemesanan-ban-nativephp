<?php
session_start();
include './src/koneksi.php';

if (mysqli_connect_errno()) {
    echo "Koneksi database Gagal!" . mysqli_connect_error();
}
?>
<?php
include('./src/index.php')
?>