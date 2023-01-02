<script src="https://cdn.tailwindcss.com"></script>
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
        $hitungpesanan = $koneksi->query("SELECT * from pemesanan");
        $countpesanan = mysqli_num_rows($hitungpesanan)
        ?>

        <div class="col-10">
            <div class="info-box">
                <span><img width="75px" src="../assets/logo.gif" alt=""></span>
                <div class="info-box-content">
                    <span class="text-2xl font-weight-bold info-box-text">Hans Ban</span>
                    <span class="info-box-text text-justify">Hans Ban adalah Sebuah toko online yang menjual berbagai macam ban motor. <br>Terdapat berbagai macam merk sepert: IRC, Michellin, Corsa, Pirelli, DLL</span>
                </div>
            </div>
        </div>
        <br /><br />

        <div class="col">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-table"></i></span>
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
                    <span class="info-box-text">Jumlah Pemesanan</span>
                    <span class="info-box-number"><?php echo $countpesanan; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>