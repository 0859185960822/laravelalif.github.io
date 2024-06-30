<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>portopolio Naufal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/2.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <!-- foto kotak -->
        <img src="assets/img/profil-saya.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="{{ url('/home') }}">Naufal Alif Vivaldi</a></h1>
        <div class="social-links mt-3 text-center">
          <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
          <a href="https://www.facebook.com/profile.php?id=61555203672395&mibextid=ZbWKwL" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/weak.general?igsh=Y3h6MDV1dnJ1dnVw" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
          <a href="https://www.linkedin.com/in/naufal-alif-796436286/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portofolio</span></a></li>
          <li><a href="#blog" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Blog</span></a></li>
          <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- gantinya si style.css -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Naufal Alif Vivaldi</h1>
      <p>Saya Adalah Seorang <span class="typed" data-typed-items="Network Administrator, Developer"></span></p>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Saya Adalah Seorang Mahsiswa Informatika Di Institut Teknologi Sains Dan Kesehatan Rs.dr.Soepraoen Kota Malang.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <!-- foto kotak -->
            <img src="assets/img/profil-saya.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Network Administrator &amp; Web Developer.</h3>
            <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span>6 Mei 2004</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>https://alifvivaldi.wordpress.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Kontak:</strong> <span>+62859185960822</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>Malang, Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Usia:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Newbie</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>alifvivaldi726@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Hobi:</strong> <span>Menonton Anime</span></li>
                </ul>
              </div>
            </div>
            <p>
              Saya Memiliki Semangat Juang Yang Tinggi, Totalitas Dan Bertanggung Jawab Atas Pekerjaan Yang Di Berikan Serta Suka Dengan Tantangan.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Riwayat Hidup</h2>
          <p>Berikut Adalah Riwayat Pendidikan Dan Pengalaman Saya</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Profil Singkat</h3>
            <div class="resume-item pb-0">
              <h4>Naufal Alif Vivaldi</h4>
              <p><em>Seorang Administrator Jaringan Dan Pengembang Perangkat Lunak yang Tanggap Dalam Menghadapi Suatu Permasalahan dalam pengerjaannya. Dengan Pengalaman lebih dari setahun di industri</em></p>
              <ul>
                <li>JL.Semeru 24 ,Malang, Jawa Timur</li>
                <li>(+62)859185960822</li>
                <li>alifvivaldi726@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Pendidikan</h3>
            <div class="resume-item">
              <h4>SMKN 4 Malang</h4>
              <h5>2019 - 2022</h5>
              <p><em>Teknik Komputer dan Jaringan</em></p>
              <p>Mempelajari Mengenai Perangkat Komputer Dasar dan juga Jaringan Komputer Dasar yang meliputi Trouble Shooting, penanganannya, serta bagaimana mengaplikasikanya dengan teknologi yang telah ada</p>
            </div>
            <div class="resume-item">
              <h4>Institut Teknologi Sains dan Kesehatan Rs.dr.Soepraoen Malang</h4>
              <h5>2022-sekarang</h5>
              <p><em>Informatika</em></p>
              <p>Mempelajari Mengenai Software dan Pengembanganya serta Berbagai Pembelajaran Berbasis Ilmu Teknologi seperti Mobile, Web, IoT, AI, dan lain sebagainya.</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Magang</h3>
            <div class="resume-item">
              <h4>Network Operation center SMKN 4 Malang</h4>
              <h5>2021 - 2022</h5>
              <p><em>Malang, Jawa Timur</em></p>
              <ul>
                <li>Menangani Segala hal yang berketerkaitan dengan jaringan di area SMKN 4 MALANG</li>
                <li>Memperbaiki PC dan hardware lainya di lingkup SMKN 4 Malang </li>
                <li>Menghandle event Besar di lingkup SMKN 4 Malang</li>
                <li>mengelola webiste dan sosmed SMKN 4 Malang</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portofolio</h2>
          <p>Beberapa Karya Yang Pernah saya Buat</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Aplikasi</li>
              <li data-filter=".filter-net">Networking</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/antrian rumkit 1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/antrian rumkit 1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Aplikasi Antrian Rumah Sakit Menggunkan Stack And Queue"><i class="bx bx-plus"></i></a>
                <a href="{{ url('/antrian') }}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/blogspot.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/blogspot.PNG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Blogspot"><i class="bx bx-plus"></i></a>
                <a href="https://sekaisaikyo.blogspot.com" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kasir.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/kasir.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Aplikasi Kasir Sederhana Menggunakan Java"><i class="bx bx-plus"></i></a>
                <a href="{{ url('/kasir') }}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-net">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/p10.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/p10.PNG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Topologi Kantor Guru SMA Oya"><i class="bx bx-plus"></i></a>
                <a href="{{ url('/kantor_sma') }}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/wordpress.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/wordpress.PNG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wordpress"><i class="bx bx-plus"></i></a>
                <a href="https://alifvivaldi.wordpress.com" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/menu nfn.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/menu nfn.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Aplikasi Gaji dan Data Dokter Menggunakan Java"><i class="bx bx-plus"></i></a>
                <a href="{{ url('/data_gaji_dktr') }}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-net">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/smart home IoT.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/smart home IoT.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Topologi Smart Home dengan IoT"><i class="bx bx-plus"></i></a>
                <a href="{{ url('/smart_home') }}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-net">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/vlan office.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/vlan office.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Topologi Vlan Mini Industri"><i class="bx bx-plus"></i></a>
                <a href="{{ url('/vlan') }}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/webhost000.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/webhost000.PNG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sekai Saikyo website"><i class="bx bx-plus"></i></a>
                <a href="{{ url('/sekai') }}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pgpg.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/pgpg.PNG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Game Ping Pong Dengan Python"><i class="bx bx-plus"></i></a>
                <a href="{{ url('/pingpong') }}" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    
    <!-- End Services Section -->

<!-- ini blog ygy -->
<div id="blog">
  <div class="section-title">
  <h2>Daftar Tulisan Blog</h2>
  </div>

 <!-- Tambahkan input pencarian di sini -->
 <input type="text" id="searchInput" placeholder="Cari postingan...">

 <div id="posts">
     <!-- Postingan blog akan ditampilkan di sini -->
 </div>
 <br>
  <div class="section-title">
 <h2>Tambah Postingan Baru</h2>
 </div>
 <form id="newPostForm">
     <label for="title">Judul:</label>
     <input type="text" id="title" name="title" required><br>

     <label for="content">Konten:</label>
     <textarea id="content" name="content" required></textarea><br>

     <button type="submit">Tambah</button>
 </form>
</div>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimoni</h2>
          <p>Beberapa Pendapat Dari Client saya Sebelumnya</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Alif sangatlah friendly dengan para mitra kerjanya, pengerjaanya cepat, dan Semangatnya Tinggi.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/assets/img/testimonials/bang hnl.jpg" class="testimonial-img" alt="">
                <h3>Hokuto</h3>
                <!-- <h4>Ceo &amp; Founder</h4> -->
                <h4>Tim IT SMA Oya</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  seseorang yang memiliki pemikiran yang luas serta tanggap dalam menyelesaikan permasalahan, serta sangat bersemangat dalam mengerjakan projek.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/hanma shuji.jpg" class="testimonial-img" alt="">
                <h3>Hanma Shuji</h3>
                <h4>Secound Leader Valhalla</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Pengerjaannya tepat waktu serta memenuhi standart perusahaan, dirinya juga mudah dalam beradaptasi dengan teknologi terbaru.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/mafia indo.jpg" class="testimonial-img" alt="">
                <h3>Bang Den</h3>
                <h4>Leader of Mafia indo</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  sangat mudah untuk dihubungi jika terjadi kendala, serta sangat loyal dengan pelanggan, atasan, maupun rekan kerjanya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/Linyi.jpg" class="testimonial-img" alt="">
                <h3>Linyi</h3>
                <h4>Officer</h4>
              </div>
            </div><!-- End testimonial item -->

            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Hubungi Saya</h2>
          <p>Apabila Terdapat Sesuatu Yang perlu Didiskusikan dapat Menghubungi saya Dibawah</p>
          </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p>JL. Semeru No.24 Malang Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>alifvivaldi726@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Nomor Telepon:</h4>
                <p>+62 859185960822</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.2188548302897!2d112.62572237275775!3d-7.9763181795151965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628247b8f3c7f%3A0xd90fc0e87bbe615e!2sWarung%20Rawon%20%26%20Rujak!5e0!3m2!1sid!2sid!4v1711417748374!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama Anda</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email Anda</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subjek</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <!-- <div class="error-message"></div> -->
                <div class="sent-message">Pesanmu Udah Tersampaikan</div>
              </div>
              <div class="text-center"><button type="submit">Kirim</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="index.html">Alif Vivaldi</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script> 
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>