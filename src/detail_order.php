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

<div class="container border">
    <h1 class="text-3xl mt-4 text-center font-semibold">Order Detail</h1>

    <?php
    include './koneksi.php';
    ?>
    <div class="container row align-items-center align-self-center">
        <form method="POST" class="col">

            <div class="form-group">
                <label class="float-left" for="">Masukkan Nama Anda :</label>
                <input class="form-control" id="name" aria-describedby="name" name="nama_pemesan" required>
            </div>
            <div class="form-group">
                <label class="float-left" for="">Masukkan Email Anda :</label>
                <input class="form-control" id="email" aria-describedby="email" name="email_pemesan" required>
            </div>

            <div class="form-group">
                <label class="float-left" for="">Nama Produk :</label>
                <input class="form-control" name="nama_produk" readonly value="<?php echo $result['nama_produk'] ?>" </div>

                <div class="form-group">
                    <label class="float-left" for="">Quantity / Jumlah :</label>
                    <input type="number" class="form-control" id="message" name="qty" required>
                </div>
                <div class="form-group">
                    <label class="float-left" for="">No Telp :</label>
                    <input type="text" class="form-control" id="message" name="no_telp" required>
                </div>
                <div class="form-group">
                    <label class="float-left" for="">Alamat :</label>
                    <input type="text" class="form-control" id="message" name="alamat" required>
                </div>
                <div class="form-group">
                    <label class="float-left" for="">Tanggal Pemesanan :</label>
                    <input type="date" name="tgl_pemesanan" placeholder="yyy-mm-dd" value="" min="1997-01-01" max="2030-12-31" class="form-control" id="message" required>
                </div>
                <div class="form-group">
                    <button name="order" class="text-white btn bg-blue-500 hover:bg-blue-800">Pesan</button>
                </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['order'])) {
    include 'koneksi.php';
    $nama  = $_POST['nama_pemesan'];
    $email = $_POST['email_pemesan'];
    $nama_produk  = $_POST['nama_produk'];
    $qty = $_POST['qty'];
    $no_telp  = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $tgl_pemesanan = $_POST['tgl_pemesanan'];

    mysqli_query($koneksi, "INSERT INTO pemesanan VALUES('','$nama', '$email', '$nama_produk', '$qty', '$no_telp', '$alamat', '$tgl_pemesanan')");
    // Simpan Gambar

    echo "<br><div class='alert alert-success text-center'> Proses Order Sukses </div>";
    echo "<meta http-equiv='refresh' content='1; url=index.php>";
}
?>