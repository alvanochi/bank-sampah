
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bank Sampah | Pendaftaran</title>
  <?php
  include "layout_head_and_footer/head.php";
?>

  <link rel="stylesheet" href="front-end-assets/assets/css/main.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="pages_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <!-- <link rel="stylesheet" href="pages_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="pages_assets/dist/css/adminlte.min.css"> -->
</head>
<body class="hold-transition register-page">

<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Bank Sampah<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="index.php#about">Tentang</a></li>
          <li><a href="index.php#menu">Petunjuk</a></li>
          <li><a href="index.php#gallery">Galeri</a></li>
       
          <li><a href="index.php#contact">Lokasi</a></li>
        </ul>
      </nav>

      <a class="btn-book-a-table" href="login.php">Masuk</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>
<div class=" mt-5">
  

  <section id="book-a-table" class="book-a-table section-bg">
      <div class="container">

        <div class="section-header">
          <h2>akun</h2>
          <p>Silahkan <span>daftar</span> disini</p>
        </div>

        <div class="row g-0">
              <div class="col-lg-12 ml-5 reservation-form-bg">
                <form action="front-end-assets/forms/book-a-table.php" method="post" role="form" class="php-email-form">
                  <div class="row gy-4">
                      <form action="#" class="signin-form">
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                              <label class="label" for="NIK">NIK</label>
                              <input type="number" class="form-control" placeholder="32011xxxxxxx" required>
                            </div>
                            <div class="form-group mb-2">
                              <label class="label" for="name">Nama</label>
                              <input type="text" class="form-control" placeholder="Nama" required>
                            </div>
                            <div class="form-group mb-2">
                              <label class="label" for="Nomor">No Telpon</label>
                              <input type="number" class="form-control" placeholder="0812xxxxx" required>
                            </div>
                            <div class="form-group mb-2">
                              <label class="label" for="Alamat">Alamat</label>
                              <input type="text" class="form-control" placeholder="Jlnxxx" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                              <label class="label" for="username">Username</label>
                              <input type="text" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group mb-2">
                              <label class="label" for="email">Email</label>
                              <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group mb-2">
                              <label class="label" for="password">Password</label>
                              <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group mb-4">
                              <label class="label" for="password">Confirm Password</label>
                              <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <center>
                          <div class="form-group w-75 text-center">
                              <button type="submit" class="form-control btn rounded submit px-3 text-center">Daftar</button>
                          </div>
                        </center>
                      </form>
                    </div>
                </form>
              </div>
        </div>
      </div>
</section>
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="pages_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="pages_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="pages_assets/dist/js/adminlte.min.js"></script>
</body>
</html>
