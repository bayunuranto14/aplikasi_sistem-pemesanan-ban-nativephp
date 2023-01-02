<?php include('../koneksi.php') ?>

<h1 class="text-center">Tambah Produk</h1>

<div class="container bg-light text-dark">
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Nama">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk">
        </div>
        <div class="form-group">
            <label for="Harga">Harga (Rp)</label>
            <input type="number" class="form-control" name="harga">
        </div>
        <div class="form-group">
            <label for="Merk">Merk</label>
            <input type="text" class="form-control" name="merk">
        </div>
        <div class="form-group">
            <label for="jumlah_stok">Stok</label>
            <input type="number" class="form-control" name="jumlah_stok">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Foto Produk</label>
            <input type="file" class="form-control" name="gambar" required>
        </div>
        <button class="btn btn-primary" name="save">Simpan</button>
        <a href="index.php?halaman=produk" class="btn btn-warning">Kembali</a>
    </form>
</div>

<?php
if (isset($_POST['save'])) {
    $nama = $_FILES['gambar']['name'];
    $locate = $_FILES['gambar']['tmp_name'];
    // Simpan Gambar
    move_uploaded_file($locate, "./foto_produk/" . $nama);
    $koneksi->query("INSERT INTO produk(nama_produk, harga, merk, jumlah_stok, deskripsi, gambar) VALUES('$_POST[nama_produk]', '$_POST[harga]', '$_POST[merk]', '$_POST[jumlah_stok]', '$_POST[deskripsi]','$nama')");

    echo "<br><div class='alert alert-success text-center'> Data berhasil disimpan! </div>";
    echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=produk'>";
}
?>

<?php include('./footer.php');
