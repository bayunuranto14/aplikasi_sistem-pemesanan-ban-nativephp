<?php include '../koneksi.php'; ?>
<h1 class="text-center">Ubah Produk</h1>
<?php
$ambil = $koneksi->query("SELECT * FROM produk where id_produk = '$_GET[id]'");
$editproduk = $ambil->fetch_assoc();
?>
<pre><?php print_r($ambil); ?></pre>
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label> Nama Produk </label>
        <input type="text" name="nama_produk" class="form-control" value="<?php echo $editproduk['nama_produk'] ?>">
        <label> Nama Produk </label>
        <input type="text" name="nama_produk" class="form-control" value="<?php echo $editproduk['harga'] ?>">
        <label> Nama Produk </label>
        <input type="text" name="nama_produk" class="form-control" value="<?php echo $editproduk['deskripsi'] ?>">
        <label> Nama Produk </label>
        <input type="text" name="nama_produk" class="form-control" value="<?php echo $editproduk['merk'] ?>">
        <label> Nama Produk </label>
        <input type="text" name="nama_produk" class="form-control" value="<?php echo $editproduk['jumlah_stok'] ?>">
    </div>
</form>