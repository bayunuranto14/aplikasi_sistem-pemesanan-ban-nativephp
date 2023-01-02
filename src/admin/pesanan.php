<div class="container">
    <h2 class="text-center">Data Pemesanan</h2>
    <a class="mb-4 p-2 btn badge nav-link navbar-dark text-light text-left" href="#">Hapus Semua Data Pesanan</a>
    <div class="card">
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Nama Pemesan </th>
                        <th> Email Pemesan </th>
                        <th> Nama Produk </th>
                        <th> Merk </th>
                        <th> Quantity </th>
                        <th> No. Telp </th>
                        <th> Alamat </th>
                        <th> Tanggal Pemesanan </th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include '../koneksi.php' ?>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $koneksi->query("SELECT * from pemesanan"); ?>

                    <?php while ($datas = $ambil->fetch_array()) { ?>
                        <tr class="text-center">
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $datas['nama_pemesan']; ?></td>
                            <td><?php echo $datas['email_pemesan'] ?></td>
                            <td><?php echo $datas['nama_produk'] ?></td>
                            <td><?php echo $datas['merk'] ?></td>
                            <td><?php echo $datas['qty'] ?></td>
                            <td><?php echo $datas['no_telp'] ?></td>
                            <td><?php echo $datas['alamat'] ?></td>
                            <td><?php echo $datas['tgl_pemesanan'] ?></td>
                            <td><button class="btn badge btn-success"><i class="fa fa-whatsapp"></i> WhatsApp</button>
                                <button class="btn badge btn btn-danger"><i class="fa fa-envelope"></i> Email</button>
                                <button class="btn badge btn-primary"> Hapus Pesanan</button>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>