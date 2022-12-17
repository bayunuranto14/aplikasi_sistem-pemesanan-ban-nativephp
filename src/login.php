<?php
session_start();
include './koneksi.php';

include_once('../layouts/topbar.php');
// include_once('./layouts/config.php');
?>
<div class="container">
  <div class="row">
    <div class="col justify-content-center align-self-center">
      <img class="w-70" src="./assets/logo.gif" alt="">
    </div>

    <div class="col shadow-lg">
      <div class="container">
        <h1 class="text-center text-2xl font-bold">SIlakan Login</h1>
        <form id='login' class="form-group font-italic p-4 mb-4 mt-4" method="post">
          <div class="form-outline">
            <label class="form-label float-left" for="username" aria-placeholder="">Username</label>
            <input type="text" name="username" class="form-control" />
          </div>
          <!-- Password input -->
          <div class="form-outline">
            <label class="form-label float-left" for="password" type="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" />
          </div>
          <!-- Submit button -->
          <div class="form-outline mb-4">
            <button name="login" class="btn bg-blue-500 text-white mt-4 md-2 mb-4">LOGIN</button>
          </div>
        </form>


        <?php
        if (isset($_POST['login'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $ambil = $koneksi->query("SELECT * FROM admin where username='$_POST[username]' and password='$_POST[password]'");

          $validasi = $ambil->num_rows;

          if ($validasi == 1) {
            $akun = $ambil->fetch_assoc();
            $_SESSION['admin'] = $akun;
            echo "<div class='alert alert-success text-center'>Login Sukses!</div>";
            echo "<script>location='admin/index.php'</script>";
          } else {
            echo "<div class='alert alert-danger text-center'>Login Gagal ! Silahkan cek username dan password anda kembali');</div>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
          }
        }
        ?>
      </div>
    </div>
  </div>
  <?php
  include('../layouts/footer.php')
  ?>
  </section>