<?php
// Connect to MySQL database
$host = "localhost";
$username = "root";
$password = "";
$database = "penjualan_ban";

$koneksi = mysqli_connect($host, $username, $password, $database);




// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully to the database.";

// Close connection
// mysqli_close($koneksi);
