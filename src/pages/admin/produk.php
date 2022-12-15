<h2 class="text-center">Data Produk</h2>
<table class="table table-boardered text-center">
    <thead>
        <tr>
            <th> No </th>
            <th> Nama Produk </th>
            <th> Harga </th>
            <th> Deskripsi </th>
            <th> Merk </th>
            <th> Jumlah Stok </th>
            <th> Gambar </th>
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
                    <img src="../foto_produk/" <?php echo $datas['gambar']; ?>width="150" height="100">
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>