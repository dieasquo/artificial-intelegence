<?php include "header.php" ?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Alopakar</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="foward.php">Foward Chaining</a></li>
          <li><a href="backward.php">Backward Chaining</a></li>
          <li class="drop-down"><a href="">Pengaturan</a>
            <ul>
              <li><a href="form/add-gejala.php">Tambah Gejala - Foward</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Sistem <span> Pakar</span></h2>
          <p class="animate__animated fanimate__adeInUp">Sistem pakar (expert system) adalah sistem yang berusaha mengadopsi pengetahuan manusia ke komputer, agar komputer dapat menyelesaikan masalah seperti yang biasa dilakukan oleh para ahli, dan sistem pakar yang baik dirancang agar dapat menyelesaikan suatu permasalahan tertentu dengan meniru kerja dari para ahli</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Metode Foward Chaining</h2>
          <p class="animate__animated animate__fadeInUp">Metode forward Chaining
            atau kadang disebut:data-driven karena inference engine menggunakan informasi yang ditentukan oleh user untuk memindahkan ke seluruh jaringan dari logika ‘AND’ dan ‘OR’ sampai sebuah terminal ditentukan sebagai objek. Bila inference engine tidak dapat menentukan objek maka akan meminta informasi lain.
            Aturan (Rule) di mana menentukan objek, membentuk path (lintasan) yang mengarah ke objek. Oleh karena itu, hanya satu cara untuk mencapai satu objek adalah memenuhi semua aturan.

          </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Metode Backward Chaining</h2>
          <p class="animate__animated animate__fadeInUp">Metode backward chaining adalah pelacakan kebelakang yang memulai penalarannya dari kesimpulan (goal), dengan mencari sekumpulan hipotesis-hipotesis menuju fakta-fakta yang mendukung sekumpulan hipotesis-hipotesis tersebut.

            Metode backward Chaining merupakan kebalikan dari forward chaining dimana dimulai dengan sebuah hipotesis (sebuah objek) dan meminta informasi untuk meyakinkan atau mengabaikan. Backward chaining inference engine sering disebut: ‘Object-Driven/Goal-Driven‘.

          </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Contact Section ======= -->
    <section id="about" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About Me</h2>
          <p>About </p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Address:</h4>
                <p>Jl. Rentalnesia Jawa Timur</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>rentalnesia.corp@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Phone:</h4>
                <p>+62 8123 4567 89</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php include "footer.php" ?>