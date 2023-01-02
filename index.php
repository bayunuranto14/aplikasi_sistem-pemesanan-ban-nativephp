<?php
session_start();
include './src/koneksi.php';
if (mysqli_connect_errno()) {
    echo "Koneksi database Gagal!" . mysqli_connect_error();
}
?>

<?php

?>

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
    <link rel="stylesheet" href="./assets/css/dark-mode.css">
    <link rel="stylesheet" href="./assets/css/produk.css">
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
                <li><a data-scroll href="index.php?" class="nav-link font-bold">Home</a></li>
                <li><a data-scroll href="./src/index.php?halaman=produk_katalog" class="nav-link font-bold">Products</a></li>
                <li><a data-scroll href="#about" class="nav-link font-bold">About</a></li>
                <li><a data-scroll href="#contact" class="nav-link font-bold">Contact</a></li>
                <li><a data-scroll href="./src/login.php" class="nav-link font-bold">Login</a></li>

                <div class="flex mr-4 ml-4">
                    <input type="search" id="form1" class="form-control" />
                    <button type="button" class="btn bg-cyan-500 hover:bg-red-500 text-white border rounded-lg ml-2">
                        <i class="fas fa-search "></i>
                        </buton>
                </div>

                <div class="nav-link d-flex">
                    <img class="mr-2 hover:bg-white" width="25px" ; src="./assets/img/sun.png" alt="">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="darkSwitch">
                        <label class="custom-control-label " for="darkSwitch">
                        </label>
                    </div>
                    <img class="mr-auto hover:bg-black" width="25px" ; src="./assets/img/moon.png" alt="">
                </div>
            </nav>
        </header>


        <div class="container rounded-lg mb-4">
            <ul class="nav sticky rounded-lg bg-cyan-500 text-light hover:bg-orange-700 hover:text-orange-500 font-semibold text-xl justify-content-center">
                <p>
                    <marquee behavior="" direction="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ab
                        nesciunt temporibus doloremque, doloribus sapiente optio! Esse corrupti, odit quod, numquam hic
                        repellat placeat vitae sapiente earum inventore ab rerum.</marquee>

                </p>
            </ul>
        </div>
        <main>

            <div class="container">

                <div class=" bg-no-repeat bg-gradient-to-t bg-center shadow-lg text-light">
                    <div class="container-fluid">

                        <div id="carouselExampleControls" class="carousel slide rounded" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-70 mx-auto" src="./assets/img/banner.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-70 mx-auto" src="./assets/img/banner.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-70 mx-auto" src="./assets/img/banner.png" alt="Third slide">
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <div id="about" class="container-fluid mb-4 py-4 pt-4 py-0 p-1 rounded-xl">
                            <div class=" btn-group-justified" role="group" aria-label="Basic example">
                                <a href="#home" target="_blank">
                                    <button type="button" class="btn btn-lg bg-blue-600 mr-3 mt-4 text-white font-semibold">
                                        BROWSE
                                    </button></a>
                                <a href="./src/index.php">
                                    <button type="button" class="btn btn-lg bg-success mr-3 text-white mt-4 font-semibold">
                                        PRODUCT CATALOG
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="container shadow-lg my-4 py-lg-4 rounded-lg">
                    <h1 id="about" class="text-center  rounded-lg border border mt-2 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-slate-200 hover:from-pink-500 hover:to-yellow-500 hover:text-slate-700 text-3xl font-bold text-uppercase">
                        About Us</h1>
                    <div class="container rounded-2xl">
                        <div class="row border ">
                            <div class="col text-white">
                                <img class="m-4 p-4 rounded-lg mx-auto img-fluid w-70 h-auto" src="./assets/img/logo.gif" alt="logo">
                            </div>
                            <div class="col text-white">
                                <div class="bg-slate-600 rounded-lg my-4">
                                    <h3 style="background-color: #8fc9d6;" class=" rounded-lg text-center text-3xl font-bold">Visi
                                    </h3>
                                    <p class="m-4 text-justify text-xl-center lead font-semibold">Menjadi pengusaha
                                        perdagangan nasional berkelas dunia terpercaya dan terkemuka.</p>
                                </div>
                                <div class="bg-slate-600 rounded-lg">
                                    <h3 style="background-color: #8fc9d6;" class=" mt-4 text-center text-3xl font-bold">
                                        Misi</h3>
                                    <div class="text-justify text-xl-center lead font-semibold">
                                        <li>Menyediakan produk dan solusi yang berkualitas, efisien, layanan dan
                                            dukungan yang penuh terhadap produk dan layanan yang diberikan.
                                        </li>
                                        <li>
                                            Berkomitmen memberikan kepuasan pelanggan dengan menjaga kualitas,
                                            harga,
                                            dan
                                            waktu pengerjaan.
                                        </li>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-4">
                    <h1 class="text-center shadow-lg rounded-lg border border mt-4 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-slate-200 hover:from-pink-500 hover:to-yellow-500 hover:text-slate-700 text-3xl font-bold text-uppercase">
                        Contact US</h1>
                    <div class="p-4 shadow-lg text-white ">
                        <div class="row">
                            <div class="col ">
                                <div class="mt-auto bg-slate-700 my-4 p-4 rounded-3xl">
                                    <p class="float-left ">
                                    <h1 class="text-center  text-2xl font-semibold">Contact Us</h1>
                                    <p class="lead text-justify mb-2">
                                        Silahkan jika ingin memesan atau ingin bertanya bisa mengisi form yang ada
                                        dibawah ini :
                                    </p>
                                    <form id="contact" class="p-4 ">
                                        <div class="form-group">
                                            <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Masukkan Nama Anda :">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Masukkan Email Anda :">
                                        </div>
                                        <div class="form-group">
                                            <input type="message" class="form-control" id="message" placeholder="Masukkan Pesan Anda ...">
                                        </div>
                                        <button type="submit" class="float-left btn btn-primary">Kirim</button>
                                    </form>
                                    </p>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="mt-auto bg-slate-700 my-4 p-4 rounded-3xl">
                                    <h1 class="text-center font-semibold text-xl">
                                        Ikutin kami di Sosial Media :
                                    </h1>
                                    <p class="text-3xl p-2">
                                        <a href=""><i class="fab fa-facebook mr-2 hover:bg-orange-300" onclick="location.href='#'"></i></a>
                                        <a href=""><i class="fab fa-github mr-2 hover:bg-orange-300" onclick="location.href='#'"></i></a>
                                        <a href=""><i class="fab fa-instagram mr-2 hover:bg-orange-300"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
            </section>
        </main>

        <body>
            <footer>
                <div class="container my-4">
                    <h1 class="text-center text-lead text-2xl">2022 | Hans Ban</h1>
                </div>
            </footer>
            </main>

            <script>
                var scroll = new SmoothScroll('a[href*="#"]', {
                    speed: 10,
                    speedAsDuration: true
                });
            </script>

            <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js">
            </script>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
            </script>
            <script src="./assets/js/dark-mode-switch.js"></script>
        </body>

</html>