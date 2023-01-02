<?php
include './koneksi.php';
?>


<div class="container">
    <?php include './nav-brand.php'; ?>
    <div class="d-flex justify-content-between"></div>
    <?php
    $getproduk = $koneksi->query("SELECT * from produk where merk like 'swallow'"); ?>
    <div class="row justify-content-center">
        <?php while ($produk = $getproduk->fetch_assoc()) { ?>
            <div class="card-group">
                <div class="card btn hover:bg-yellow-500 mx-4 mt-4 " style="width:17rem; max-height: fit-content">
                    <div class="card-img-top">
                        <?php
                        echo "<img src='./admin/foto_produk/"  . $produk['gambar'] . "' />";
                        ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-text text-truncate font-semibold"><?php echo $produk['nama_produk'] ?></h5>
                        <p class="card-text font-semibold">Rp. <?php echo number_format($produk['harga']) ?></p>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <div class="mt-2">
                            <a href="detail_produk.php?id_produk=<?= $produk['id_produk']; ?>" class="text-white rounded-lg badge bg-orange-500 hover:bg-orange-700">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>