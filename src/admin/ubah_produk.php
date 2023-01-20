<h1 class="text-center">Ubah Produk</h1>
<?php
include 'koneksi.php';
$ambil = $koneksi->query("SELECT * FROM produk where id_produk = '$_GET[id])'");
$editproduk = mysqli_fetch_array($ambil);
// $editproduk = $ambil->fetch_array();
?>
<div class="container">
    <form action="./update.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">

            <input type="hidden" name="id_produk" class="form-control" value="<?php echo $editproduk['id_produk'] ?>">
            <label> Nama Produk </label>
            <input type="text" name="nama_produk" class="form-control" value="<?php echo $editproduk['nama_produk'] ?>">
            <label> Harga </label>
            <input type="number" name="harga" class="form-control" value="<?php echo $editproduk['harga'] ?>">
            <label> Merk </label>
            <input type="text" name="merk" class="form-control" value="<?php echo $editproduk['merk'] ?>">
            <label> Deskripsi </label>
            <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="<?php echo $editproduk['deskripsi'] ?>"></input>
            <div class="form-group">
                <label for="gambar">Foto Produk</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <label> Jumlah Stok </label>
            <input type="number" name="jumlah_stok" class="form-control" value="<?php echo $editproduk['jumlah_stok'] ?>">
            <br>
            <input type="submit" class="btn btn-success" name="edit" value="Simpan">
        </div>
    </form>
</div>