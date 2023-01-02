<?php
include_once('../layouts/topbar.php');
include './koneksi.php';
if (isset($_GET['id_produk'])) {
    $id_produk = $_GET['id_produk'];
} else {
    die("Error");
}
include './koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id_produk'");
$result = mysqli_fetch_array($query);
?>


<div class="container">
    <h1 class="text-center mt-4 text-3xl font-bold">DETAIL PRODUK</h1>
    <div class="row mt-4">

        <div class="col">
            <?php
            echo "<img src='./admin/foto_produk/"  . $result['gambar'] . "' />";
            ?>
        </div>


        <div class="col">
            <div class="float-left border">
                <a class="nav-link" href=""> <?php echo $result['merk']; ?></a>
            </div>
            <h1 class="p-4 text-center text-3xl font-semibold"><?php echo $result['nama_produk'] ?></h1>
            <p class="mt-4  text-center text-xl">Rp. <?php echo number_format($result['harga']) ?></p>
            <p class="mt-4 text-2xl text-justify">
                <?php echo $result['deskripsi'] ?>
            </p>
            <div class="m-4">
                <a href="index.php?halaman=pemesanan" class="justify-content-center mt-4 btn btn-lg btn-primary">PESAN</a>
                <a href="index.php?halaman=produk_katalog" class="text-dark justify-content-center mt-4 btn btn-lg btn-warning">Kembali Ke Produk Katalog</a>
            </div>
        </div>
    </div>

</div>


<?php
include_once('../layouts/footer.php');
?>
<style>
    @media screen and (max-width: 768px) {
        .row {
            grid-template-columns: 1fr;
            gap: 10px;
        }
    }
</style>