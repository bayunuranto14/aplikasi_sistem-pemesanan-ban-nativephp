<?php require_once '../koneksi.php'; ?>
<h1 class="text-center">Ubah Produk</h1>
<?php
$ambil = $koneksi->query("SELECT * FROM produk where id_produk = '$_GET[id]'");
$editproduk = $ambil->fetch_array();
?>
<div class="container">
    <form method="POST" action="./update.php" enctype="multipart/form-data">
        <div class="form-group">
            <label> Nama Produk </label>
            <input type="text" name="nama_produk" class="form-control" value="<?php echo $editproduk['nama_produk'] ?>">
            <label> Harga </label>
            <input type="number" name="harga" class="form-control" value="<?php echo $editproduk['harga'] ?>">
            <label> Merk </label>
            <input type="text" name="merk" class="form-control" value="<?php echo $editproduk['merk'] ?>">
            <label> Deskripsi </label>
            <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="<?php echo $editproduk['deskripsi'] ?>"></input>
            <label> Jumlah Stok </label>
            <input type="number" name="jumlah_stok" class="form-control" value="<?php echo $editproduk['jumlah_stok'] ?>">
            <br>
            <input type="submit" class="btn btn-success" name="edit" value="Simpan">
        </div>
    </form>
</div>