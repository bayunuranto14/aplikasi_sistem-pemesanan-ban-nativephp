<?php
// include_once('../koneksi.php');

?>
<div class="container border">
    <h1 class="text-3xl mt-4 text-center font-semibold">Form Pemesanan</h1>
    <p class="text-center">Jika anda berminat memesan Produk ini dapat di input melalui form dibawah ini :</p>

    <div class="container">
        <form action="" class="col">
            <div class="form-group">
                <label class="float-left" for="">Masukkan Nama Anda :</label>
                <input type="name" class="form-control" id="name" aria-describedby="name">
            </div>
            <div class="form-group">
                <label class="float-left" for="">Masukkan Email Anda :</label>
                <input type="email" class="form-control" id="email" aria-describedby="email">
            </div>
            <div class="form-group">
                <label class="float-left" for="">Masukkan Pesanan Anda :</label>
                <input type="message" class="form-control" id="message">
            </div>
            <div class="form-group">
                <input type="submit" class="text-white btn bg-blue-500 hover:bg-blue-800"></input>
            </div>
        </form>
    </div>
</div>