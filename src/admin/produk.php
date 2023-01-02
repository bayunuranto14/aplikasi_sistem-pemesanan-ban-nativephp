<div class="container">
    <h2 class="text-center">Data Produk</h2>
    <div class="card">
        <div class="card-body">
            <table style="max-width: 1200px; overflow-y:scroll;" class="table table-responsive-md table-striped table-valign-middle ">
                <thead>
                    <tr class="bg-gradient-dark text-white sticky-top">
                        <th> No </th>
                        <th> Nama Produk </th>
                        <th> Harga </th>
                        <th> Deskripsi </th>
                        <th> Merk </th>
                        <th> Jumlah Stok </th>
                        <th> Gambar </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    <?php include '../koneksi.php' ?>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>

                    <?php while ($datas = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $datas['nama_produk']; ?></td>
                            <td>Rp. <?php echo number_format($datas['harga']) ?></td>
                            <td><?php echo $datas['deskripsi'] ?></td>
                            <td><?php echo $datas['merk'] ?></td>
                            <td><?php echo $datas['jumlah_stok'] ?></td>
                            <td>
                                <?php
                                echo "<img style='width:150px;height:150px;' src='./foto_produk/"  . $datas['gambar'] . "' />";
                                ?>
                            <td>
                                <a href=" index.php?halaman=ubah_produk&id=<?php echo $datas['id_produk'] ?>" class="btn badge btn-success">Edit</a>
                                <a href="index.php?halaman=hapus_produk&id=<?php echo $datas['id_produk'] ?>" onclick="return confirm('apakah anda yakin menghapus data ini ? ')" class="btn badge btn-warning">Hapus</a>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>