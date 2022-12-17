<?php
include './koneksi.php';

?>

<script src="https://cdn.tailwindcss.com"></script>
<div class="container">
    <h1 class="text-3xl text-center border font-bold text-2xl mt-4">PRODUK KATALOG</h1>
</div>
<?php
$getproduk = $koneksi->query("SELECT * FROM produk");
while ($produk = $getproduk->fetch_assoc()) { ?>

    <div class="container mb-4">
        <div class="card-deck">
            <div class="container" style="margin-top:50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card-sl">
                            <div class="card-image">
                                <?php echo "<img src='./admin/foto_produk" . $produk['gambar'] . "'  />"; ?></td>
                            </div>

                            <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading text-2xl">
                                <?php echo $produk['nama_produk'] ?>
                            </div>
                            <div class="card-text">
                                <?php echo $produk['deskripsi'] ?>
                            </div>
                            <div class="card-text font-bold">
                                Rp. <?php echo number_format($produk['harga']) ?>
                            </div>
                            <a href="#" class="card-button"> Pesan </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-sl">
                            <div class="card-image">
                                <?php echo "<img src='./admin/foto_produk" . $produk['gambar'] . "'  />"; ?></td>
                            </div>

                            <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading">
                                <?php echo $produk['nama_produk'] ?>
                            </div>
                            <div class="card-text">
                                <?php echo $produk['deskripsi'] ?>
                            </div>
                            <div class="card-text">
                                Rp. <?php echo number_format($produk['harga']) ?>
                            </div>
                            <a href="#" class="card-button"> Pesan </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="https://images.pexels.com/photos/1149831/pexels-photo-1149831.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                            </div>

                            <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading">
                                <?php echo $produk['nama_produk'] ?>
                            </div>
                            <div class="card-text">
                                <?php echo $produk['deskripsi'] ?>
                            </div>
                            <div class="card-text">
                                Rp. <?php echo number_format($produk['harga']) ?>
                            </div>
                            <a href="#" class="card-button"> Pesan </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="https://images.pexels.com/photos/1149831/pexels-photo-1149831.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                            </div>

                            <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                            <div class="card-heading text-center">
                                <?php echo $produk['nama_produk'] ?>
                            </div>
                            <div class="card-text">
                                <?php echo $produk['deskripsi'] ?>
                            </div>
                            <div class="card-text">
                                Rp. <?php echo number_format($produk['harga']) ?>
                            </div>
                            <a href="#" class="card-button"> Pesan </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php  } ?>

    <style>
        /*  Helper Styles */
        body {
            font-family: Varela Round;
            background: #f1f1f1;
        }

        a {
            text-decoration: none;
        }

        /* Card Styles */

        .card-sl {
            border-radius: 8px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .card-image img {
            max-height: 100%;
            max-width: 100%;
            border-radius: 8px 8px 0px 0;
        }

        .card-action {
            position: relative;
            float: right;
            margin-top: -25px;
            margin-right: 20px;
            z-index: 2;
            color: #E26D5C;
            background: #fff;
            border-radius: 100%;
            padding: 15px;
            font-size: 15px;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
        }

        .card-action:hover {
            color: #fff;
            background: #E26D5C;
            -webkit-animation: pulse 1.5s infinite;
        }

        .card-heading {
            font-size: 18px;
            font-weight: bold;
            background: #fff;
            color: #636262;
            padding: 10px 15px;
        }

        .card-text {
            padding: 10px 15px;
            background: #fff;
            font-size: 14px;
            color: #636262;
        }

        .card-button {
            display: flex;
            justify-content: center;
            padding: 10px 0;
            width: 100%;
            background-color: #1F487E;
            color: #fff;
            border-radius: 0 0 8px 8px;
        }

        .card-button:hover {
            text-decoration: none;
            background-color: #1D3461;
            color: #fff;

        }


        @-webkit-keyframes pulse {
            0% {
                -moz-transform: scale(0.9);
                -ms-transform: scale(0.9);
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }

            70% {
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -webkit-transform: scale(1);
                transform: scale(1);
                box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
            }

            100% {
                -moz-transform: scale(0.9);
                -ms-transform: scale(0.9);
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
                box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
            }
        }
    </style>