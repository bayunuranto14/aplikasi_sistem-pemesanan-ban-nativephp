<?php include('./topbar.php') ?>
<?php include('./sidebar.php'); ?>


<div class="hold-transition sidebar-mini">
  <div class="content-wrapper">
    <section class="content-header">
      <section class="content container-fluid">
        <?php
        if (isset($_GET['halaman'])) {
          if ($_GET['halaman'] == "produk") {
            include 'produk.php';
          } elseif ($_GET['halaman'] === "tambah_produk") {
            include 'tambah_produk.php';
          } elseif ($_GET['halaman'] === "ubah_produk") {
            include 'ubah_produk.php';
          } elseif ($_GET['halaman'] === "hapus_produk") {
            include 'hapus_produk.php';
          } elseif ($_GET['halaman'] === "pemesanan") {
            include 'pesanan.php';
          } elseif ($_GET['halaman'] === "hapus_pemesanan") {
            include 'hapus_pemesanan.php';
          } elseif ($_GET['halaman'] === "pesanan") {
            include 'pesanan.php';
          } elseif ($_GET['halaman'] === "logout") {
            include 'logout.php';
          } else {
            include 'home.php';
          }
        }
        ?>
      </section>
    </section>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6 ">
              <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success">
                  <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                  </h3>
                </div>
              <?php endif ?>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!-- /.col-md-6 -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<?php include('footer.php') ?>