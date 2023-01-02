<div class="container border">
    <h1 class="text-3xl mt-4 text-center font-semibold">Form Pemesanan</h1>
    <p class="text-center">Jika anda berminat memesan Produk ini dapat di input melalui form dibawah ini :</p>
    <?php
    include './koneksi.php';

    ?>


    <div class="container row align-items-center align-self-center">
        <form action="" class="col ">

            <div class="form-group">
                <label class="float-left" for="">Masukkan Nama Anda :</label>
                <input type="name" class="form-control" id="name" aria-describedby="name" required>
            </div>
            <div class="form-group">
                <label class="float-left" for="">Masukkan Email Anda :</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" required>
            </div>
            <div class="form-group">
                <label class="float-left" for="">Nama Produk :</label>
                <input type="text" class="form-control" id="message" required>
            </div>
            <div class="form-group">
                <label class="float-left" for="">Merk :</label><br>
                <small class="float-left align-self-start">Pilih Merk dibawah ini :</small>
                <select class="form-control form-select form-select-lg mb-3" aria-label="Default select example">
                    <option selected value="..."></option>
                    <option value="1">Michelin</option>
                    <option value="2">Corsa</option>
                    <option value="3">IRC</option>
                    <option value="4">Maxxiss</option>
                    <option value="5">FDR</option>
                    <option value="6">Swallow</option>
                    <option value="7">Dunlop</option>
                    <option value="8">Metzeler</option>
                    <option value="9">Pirelli</option>
                    <option value="10">Aspira</option>
                </select>
            </div>
            <div class="form-group">
                <label class="float-left" for="">Quantity / Jumlah :</label>
                <input type="number" class="form-control" id="message" required>
            </div>
            <div class="form-group">
                <label class="float-left" for="">No Telp :</label>
                <input type="number" class="form-control" id="message" required>
            </div>
            <div class="form-group">
                <label class="float-left" for="">Alamat :</label>
                <input type="text" class="form-control" id="message" required>
            </div>
            <div class="form-group">
                <label class="float-left" for="">Tanggal Pemesanan :</label>
                <input type="date" name="date" placeholder="yyy-mm-dd" value="" min="1997-01-01" max="2030-12-31" class="form-control" id="message" required>
            </div>
            <div class="form-group">
                <input type="submit" class="text-white btn bg-blue-500 hover:bg-blue-800"></input>
            </div>
        </form>


    </div>

</div>