<h1 class="text-center">Selamat Datang Administrator</h1>
<!-- <pre><?php print_r($_SESSION); ?></pre> -->
<div class="container mb-4 mt-4">
    <!-- <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div> -->
    <div class="row position-relative">
        <?php
        include '../koneksi.php';
        $hitungproduk = $koneksi->query("SELECT * from produk");
        $countproduk = mysqli_num_rows($hitungproduk);
        ?>
        <div class="col">
            <div class="info-box bg-gradient-warning">
                <span class="info-box-icon"><i class="far fa-copy"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Jumlah Produk</span>
                    <span class="info-box-number"><?php echo $countproduk; ?></span>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Messages</span>
                    <span class="info-box-number">1,410</span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'produk.php'; ?>