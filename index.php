<!DOCTYPE html>
<html lang="en">

<?php
  include "layout_head_and_footer/head.php";
?>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Bank Sampah<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#menu">Petunjuk</a></li>
          <li><a href="#gallery">Galeri</a></li>
       
          <li><a href="#contact">Lokasi</a></li>
        </ul>
      </nav>

      <a class="btn-book-a-table" href="#book-a-table">Masuk</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Selamat datang di Bank Sampah.</h2>
          <p data-aos="fade-up" data-aos-delay="100">Merubah sampah menjadi penghasilan tambahan Anda !</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Masuk</a>
             <a href="pages/register.php" class="btn-book-a-table" style="margin-left: 10px; background-color: grey;">Daftar</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="front-end-assets/assets/img/pngwing.com.png"  class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>tentang</h2>
          <p>lebih lanjut <span>Tentang Kami</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(front-end-assets/assets/img/tentang.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>bisa belanja dengan</h4>
              <p>Sampah</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic" style="text-align:justify;">
              Bank sampah adalah sebuah inovasi yang menguntungkan bagi lingkungan dan masyarakat. Konsep bank sampah memungkinkan orang untuk menukar sampah yang mereka kumpulkan dengan uang tunai, berdasarkan jenis dan berat sampah yang diserahkan. Dengan sistem ini, masyarakat didorong untuk lebih peduli terhadap kebersihan lingkungan sekitar dan mengelola sampah dengan lebih bijaksana. Setelah mengumpulkan sampah dalam jumlah yang cukup, warga dapat menukarnya di bank sampah dan menerima kompensasi yang adil sesuai dengan jenis dan berat sampah yang mereka bawa. Keuntungan dari bank sampah ini kemudian dapat dijadikan sebagai tambahan penghasilan bagi warga, sekaligus berperan dalam mengurangi jumlah sampah yang berakhir di tempat pembuangan akhir. Dengan cara ini, bank sampah berperan sebagai upaya nyata untuk menciptakan lingkungan yang lebih bersih, sambil memberikan manfaat ekonomi bagi masyarakat yang terlibat dalam program ini.
              </p>


              <div class="position-relative mt-4">
                <img src="front-end-assets/assets/img/ngantri.jpg" class="img-fluid" alt="">
             
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

 
    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clientsss</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

  

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <h3>Petunjuk</h3>
            </div>

            <div class="row g-0">

              <div class="col-md-3 menu-item">
                <a href="front-end-assets/assets/img/tahap1.jpg" class="glightbox"><img src="front-end-assets/assets/img/tahap1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Tahap 1 </h4>
                <p class="ingredients">
                  Lakukan Pendaftaran
                </p>
              </div><!-- Menu Item -->

              <div class="col-md-3 menu-item">
                <a href="front-end-assets/assets/img/tahap2.jpg" class="glightbox"><img src="front-end-assets/assets/img/tahap2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Tahap 2</h4>
                <p class="ingredients">
                  Pemilihan Sampah
                </p>
    
              
              </div><!-- Menu Item -->

              <div class="col-md-3 menu-item">
                <a href="front-end-assets/assets/img/tahap3.jpg" class="glightbox"><img src="front-end-assets/assets/img/tahap3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Tahap 3</h4>
                <p class="ingredients">
                  Penimbangan Sampah
                </p>
               
              </div><!-- Menu Item -->

              <div class="col-md-3 menu-item">
                <a href="front-end-assets/assets/img/Tahap4.jpg" class="glightbox"><img src="front-end-assets/assets/img/tahap4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Tahap 4</h4>
                <p class="ingredients">
                  Mendapatkan Keuntungan
                </p>
      
              </div><!-- Menu Item -->

             
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Events Section ======= -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>akun</h2>
          <p>Silahkan <span>masuk</span> disini</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(front-end-assets/assets/img/login.png);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="front-end-assets/forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <form action="#" class="signin-form">
<div class="form-group mb-3">
<label class="label" for="name">Username</label>
<input type="text" class="form-control" placeholder="Username" required>
</div>
<div class="form-group mb-3">
<label class="label" for="password">Password</label>
<input type="password" class="form-control" placeholder="Password" required>
</div>
<div class="form-group">
<button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
<a  href="#">lupa kata sandi?</a>
<p class="text-center">Apakah ingin mendaftar? <a data-toggle="tab" href="#signup">Klik disini</a></p>

</div>
</div>
</div>
</form>

          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>galeri</h2>
          <p>Berikut <span>Dokumentasi kami</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="front-end-assets/assets/img/gallery/gallery-1.jpg"><img src="front-end-assets/assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="front-end-assets/assets/img/gallery/gallery-2.jpg"><img src="front-end-assets/assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="front-end-assets/assets/img/gallery/gallery-3.jpg"><img src="front-end-assets/assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="front-end-assets/assets/img/gallery/gallery-4.jpg"><img src="front-end-assets/assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="front-end-assets/assets/img/gallery/gallery-5.jpg"><img src="front-end-assets/assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="front-end-assets/assets/img/gallery/gallery-6.jpg"><img src="front-end-assets/assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="front-end-assets/assets/img/gallery/gallery-7.jpg"><img src="front-end-assets/assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="front-end-assets/assets/img/gallery/gallery-8.jpg"><img src="front-end-assets/assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Lokasi Bank Sampah</p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=dramaga&t=&z=13&ie=UTF8&iwloc=&output=embed" 
          frameborder="0" allowfullscreen></iframe>

        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Alamat Kami</h3>
                <p>Jl. Sholeh Iskandar, RT.01/RW.10, Kedungbadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16162</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Kami</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Hubungi Kami</h3>
                <p>(0251) 8356884</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Jam Kerja</h3>
                <div><strong>Senin-Sabtu:</strong> 11:00 - 23:00;
                  <strong>Minggu:</strong> Tutup
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="front-end-assets/forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Pesan berhasil di kirim, Terima kasih!</div>
          </div>
          <div class="text-center"><button type="submit">Kirim</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php 
  include "layout_head_and_footer/footer.php";
  ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="front-end-assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="front-end-assets/assets/vendor/aos/aos.js"></script>
  <script src="front-end-assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="front-end-assets/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="front-end-assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="front-end-assets/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="front-end-assets/assets/js/main.js"></script>

</body>

</html>