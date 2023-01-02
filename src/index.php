<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Aplikasi Sistem Penjualan Ban</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/dark-mode.css">
    <link rel="stylesheet" href="../assets/css/produk.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
</head>

<body class="text-center h-100">
    <div id="home" class=" d-flex mx-0 flex-column ">
        <header class="mb-4 border-bottom navbar text-white bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-pink-500 hover:to-yellow-500 from-indigo-900 via-purple-500 to-pink-500 sticky top-0 z-20">
            <h3 class="text-center lg:text-center font-bold text-2xl">
                Hans Ban
            </h3>
            <nav class="nav my-auto justify-content-center">
                <li><a data-scroll href="../index.php" class="nav-link font-bold">Home</a></li>
                <li><a data-scroll href="./index.php?halaman=produk_katalog" class="nav-link font-bold">Products</a></li>
                <li><a data-scroll href="../index.php" class="nav-link font-bold">About</a></li>
                <li><a data-scroll href="../index.php" class="nav-link font-bold">Contact</a></li>
                <li><a data-scroll href="./login.php" class="nav-link font-bold">Login</a></li>

                <div class="flex mr-4 ml-4">
                    <input type="search" id="form1" class="form-control" />
                    <button type="button" class="btn bg-cyan-500 hover:bg-red-500 text-white border rounded-lg ml-2">
                        <i class="fas fa-search "></i>
                        </buton>
                </div>

                <div class="nav-link d-flex">
                    <img class="mr-2 hover:bg-white" width="25px" ; src="../assets/img/sun.png" alt="">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="darkSwitch">
                        <label class="custom-control-label " for="darkSwitch">
                        </label>
                    </div>
                    <img class="mr-auto hover:bg-black" width="25px" ; src="../assets/img/moon.png" alt="">
                </div>
            </nav>
        </header>

        <div class="container">


            <div class="hold-transition sidebar-mini">
                <div class="content-wrapper">
                    <section class="content-header">
                        <section class="content container-fluid">
                            <?php
                            if (isset($_GET['halaman'])) {
                                if ($_GET['halaman'] == "produk") {
                                    include 'produk.php';
                                } elseif ($_GET['halaman'] === "produk_katalog") {
                                    include 'produk_katalog.php';
                                } elseif ($_GET['halaman'] === "daftar_merk") {
                                    include 'list-brand.php';
                                } elseif ($_GET['halaman'] === "pemesanan") {
                                    include 'pemesanan.php';
                                } elseif ($_GET['halaman'] === "logout") {
                                    include 'logout.php';
                                } else {
                                    include 'index.php';
                                }
                            }
                            ?>
                        </section>
                    </section>
                </div>


                <section class="content-header">

                    <?php
                    if (isset($_GET['merk'])) {
                        if ($_GET['merk'] == "michelin") {
                            include './michelin.php';
                        } elseif ($_GET['merk'] === "corsa") {
                            include './corsa.php';
                        } elseif ($_GET['merk'] === "IRC") {
                            include './irc.php';
                        } elseif ($_GET['merk'] === "pirelli") {
                            include './pirelli.php';
                        } elseif ($_GET['merk'] === "maxxis") {
                            include './maxxis.php';
                        } elseif ($_GET['merk'] === "fdr") {
                            include './fdr.php';
                        } elseif ($_GET['merk'] === "aspira") {
                            include './aspira.php';
                        } elseif ($_GET['merk'] === "metzeller") {
                            include './metzeller.php';
                        } elseif ($_GET['merk'] === "swallow") {
                            include './swallow.php';
                        } else {
                            // include 'list-brand.php';
                        }
                    }
                    ?>

                </section>

                <?php include '../layouts/footer.php' ?>