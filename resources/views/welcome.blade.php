<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="Km4D6oJ6wqAfyFo0jFc1f0agydKQYzf6HC5xP6lu">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" />
    <style>
        html {
        scroll-behavior: smooth;
        }

        body {
        width: 100%;
        height: auto;
        margin: 0px;
        padding: 0px;
        overflow-x: hidden;
        font-family: "Poppins", sans-serif;
        }

        .mt-100 {
        margin-top: 100px;
        }

        nav {
        background-color: white;
        }

        nav ul .nav-item {
        font-size: 14px;
        color: black;
        font-weight: 500;
        }

        nav .btn {
        font-weight: 600;
        -webkit-box-shadow: 0 2px 25px rgba(11, 94, 215, 0.2);
                box-shadow: 0 2px 25px rgba(11, 94, 215, 0.2);
        border-radius: 30px;
        }

        .nav-on-scroll {
        background-color: white;
        -webkit-box-shadow: 0 0.8px 8.7px rgba(0, 0, 0, 0.004), 0 1.8px 19.5px rgba(0, 0, 0, 0.007), 0 3.1px 33.3px rgba(0, 0, 0, 0.008), 0 4.7px 51.3px rgba(0, 0, 0, 0.009), 0 7px 76px rgba(0, 0, 0, 0.011), 0 10.3px 111.7px rgba(0, 0, 0, 0.012), 0 15.4px 167.4px rgba(0, 0, 0, 0.013), 0 24.5px 266.8px rgba(0, 0, 0, 0.016), 0 46px 500px rgba(0, 0, 0, 0.02);
                box-shadow: 0 0.8px 8.7px rgba(0, 0, 0, 0.004), 0 1.8px 19.5px rgba(0, 0, 0, 0.007), 0 3.1px 33.3px rgba(0, 0, 0, 0.008), 0 4.7px 51.3px rgba(0, 0, 0, 0.009), 0 7px 76px rgba(0, 0, 0, 0.011), 0 10.3px 111.7px rgba(0, 0, 0, 0.012), 0 15.4px 167.4px rgba(0, 0, 0, 0.013), 0 24.5px 266.8px rgba(0, 0, 0, 0.016), 0 46px 500px rgba(0, 0, 0, 0.02);
        }

        header h1 {
        font-size: 48px;
        letter-spacing: -1.5px;
        font-weight: 700;
        color: black;
        }

        header p {
        font-size: 15px;
        }

        header small {
        font-weight: 600;
        }

        header .btn-primary {
        -webkit-box-shadow: 0 2px 25px rgba(11, 94, 215, 0.2);
                box-shadow: 0 2px 25px rgba(11, 94, 215, 0.2);
        }

        .about-section small {
        font-weight: 700;
        }

        .about-section h1 {
        font-weight: 700;
        color: black;
        }

        .about-section p {
        font-size: 16px;
        }

        .about-section-2 small {
        font-weight: 700;
        }

        .about-section-2 h1 {
        font-weight: 700;
        color: black;
        }

        .about-section-2 p {
        font-size: 16px;
        }

        .about-section-2 .btn-primary {
        -webkit-box-shadow: 0 2px 25px rgba(11, 94, 215, 0.2);
                box-shadow: 0 2px 25px rgba(11, 94, 215, 0.2);
        }

        .map-section small {
        font-weight: 700;
        }

        .map-section h1 {
        font-weight: 700;
        color: black;
        }

        .map-section p {
        font-size: 16px;
        }

        .instruction-section .header-instruction h1 {
        font-weight: 700;
        font-size: 36px;
        color: black;
        }

        .instruction-section small {
        font-weight: 700;
        }

        .instruction-section .icon-top {
        color: white;
        font-size: 20px;
        line-height: 30px;
        -webkit-box-shadow: rgba(27, 30, 41, 0.08) 0px 16px 20px 0px;
                box-shadow: rgba(27, 30, 41, 0.08) 0px 16px 20px 0px;
        border-radius: 24px;
        }

        .instruction-section h1 {
        font-weight: 600;
        font-size: 28px;
        color: black;
        }

        .instruction-section p {
        font-size: 16px;
        }

        .end-section {
        color: white;
        border-radius: 6px;
        -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 20px -20px;
                box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 20px -20px;
        }

        .end-section h3 {
        font-weight: 600;
        }

        footer {
        color: white;
        }


        .label-top {
        font-weight: 700;
        }

        .border-shadow{
        box-shadow:rgba(0, 0, 0, 0.05) 0px 0px 4px 0px, rgba(0, 0, 0, 0.1) 0px 4px 24px 0px;
        }

    </style>

  <title>Sistem Pembayaran SPP</title>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

  <nav class="navbar navbar-expand-lg navbar-light sticky-top p-2 p-md-4 nav-on-scroll">
  <div class="container">
      <a class="navbar-brand d-flex justify-content-center align-items-center" href="/">
          <img src="{{ asset('assets/img/logo.png') }}" width="40"  class="d-inline-block align-top" alt="">
          <h3 class="ml-3">SPP</h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item me-2">
                  <a class="nav-link active" aria-current="page" href="/">Beranda</a>
              </li>
              <li class="nav-item me-2">
                  <a class="nav-link " href="#tentang">Tentang</a>
              </li>
          </ul>
          <a href="{{ url('login/siswa')}}" class="btn btn-primary px-4 py-2" style="border-radius: 0.25rem;">Masuk</a>
      </div>
  </div>
</nav>
  <header class="mt-5">
      <div class="container">
          <div class="row">
              <div class="col-md-7 my-auto">
                  <p class="label-top text-primary aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                      SISTEM PEMBAYARAN SPP </p>
                  <h1 data-aos="fade-up" data-aos-duration="1100" class="aos-init aos-animate">Sistem pembayaran SPP untuk mempermudah pembayaran
                      SPP anda
                  </h1>
                  <p data-aos="fade-up" data-aos-duration="1300" class="aos-init aos-animate">
                      Sistem pembayaran SPP online untuk mempermudah
                      pembayaran SPP anda agar dapat dilakukan dimanapun, kapanpun
                  </p>
                  <a data-aos="fade-up" data-aos-duration="1500" href="{{ url('login/siswa') }}" class="btn btn-primary px-5 py-2 mb-2 mb-md-0 aos-init aos-animate">Mulai sekarang
                  </a>
              </div>
              <div class="col-md-5 aos-init aos-animate d-flex justify-content-center align-items-center data-aos="fade-up" data-aos-duration="1700">
                  <img style="width: 50%" src="{{ asset('assets/img/logo.png') }}" alt=""  class="float-right img-fluid d-none d-lg-block d-print-block float-md-end" srcset="">
              </div>
          </div>
      </div>
  </header>

  <section class="about-section mt-100">
      <div class="container">
          <div class="row">
              <div class="col-md-10 mx-auto text-center">
                  <p data-aos="fade-up" data-aos-duration="1000" class="text-primary label-top aos-init aos-animate">TENTANG</p>
                  <h1 data-aos="fade-up" data-aos-duration="1200" class="aos-init aos-animate">APA ITU SISTEM PEMBAYARAN SPP?</h1>
                  <hr data-aos="fade-up" data-aos-duration="1400" width="50%" class="mx-auto aos-init aos-animate">
                  <p data-aos="fade-up" data-aos-duration="1600" class="aos-init aos-animate">
                      Sebuah website yang menyediakan sistem pembayaran SPP online untuk mempermudah
                      pembayaran SPP anda agar dapat dilakukan dimanapun, kapanpun
                  </p>
              </div>
          </div>
      </div>
  </section>


  <section class="instruction-section mt-100">
      <div class="container">
          <div class="row">
              <div class="header-instruction text-center">
                  <div class="col-md-7 mx-auto">
                      <p class="text-primary label-top aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">BAGAIMANA
                          Sistem Pembayaran SPP
                          BEKERJA</p>
                      <h1 data-aos="fade-up" data-aos-duration="1200" class="aos-init aos-animate">CARA LOGIN &amp; PENGGUNAAN BAGI SISWA</h1>
                      <p data-aos="fade-up" data-aos-duration="1400" class="aos-init aos-animate">

                          Cara masuk dan penggunaan pada aplikasi Sistem Pembayaran SPP, akan kami jelaskan secara rinci dibawah
                          ini.
                      </p>
                  </div>
              </div>
          </div>
          <div class="row flex-column-reverse flex-md-row">
              <div class="col-md-8 my-auto">
                  <p data-aos="fade-up" data-aos-duration="1000" class="mb-3 aos-init aos-animate"><i class="lni lni-pin icon-top bg-primary px-3 py-2 text-center"></i></p>
                  <p data-aos="fade-up" data-aos-duration="1200" class="text-primary label-top aos-init aos-animate">LANGKAH PERTAMA</p>
                  <h1 data-aos="fade-up" data-aos-duration="1400" class="mt-2 aos-init aos-animate">Login ke aplikasi Sistem Pembayaran SPP Menggunakan
                      NISN &amp; Password yang telah diberikan</h1>
                  <p data-aos="fade-up" data-aos-duration="1600" class="aos-init aos-animate">
                      Segera login dengan NISN &amp; password yang telah diberikan, setelah itu anda dapat langsung
                      masuk ke aplikasi.
                  </p>
              </div>
              <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1800">
                  <img src="{{ asset('img/section-2.png') }}" class="img-fluid" alt="">
              </div>
          </div>
          <div class="row">
              <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1800">
                  <img src="{{ asset('img/section-4.png') }}" class="img-fluid" alt="">
              </div>
              <div class="col-md-8 my-auto">
                  <p class="mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"><i class="lni lni-list icon-top bg-primary px-3 py-2 text-center"></i></p>
                  <p data-aos="fade-up" data-aos-duration="1200" class="text-primary label-top aos-init aos-animate">LANGKAH KEDUA</p>
                  <h1 data-aos="fade-up" data-aos-duration="1400" class="mt-2 aos-init aos-animate">
                     Setelah login akan diarahkan ke halaman Histori
                  </h1>
                  <p data-aos="fade-up" data-aos-duration="1600" class="aos-init aos-animate">
                      Setelah itu anda dapat melihat Detail Siswa dan list Histori Pembayaran SPP.
                  </p>
              </div>
          </div>
      </div>
  </section>

  <footer class="bg-primary p-4 mt-100">
  <div class="container text-center">
    &copy; 2021 - RPL NESAS
  </div>
</footer>    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
      disable: function () {
          var maxWidth = 800;
          return window.innerWidth < maxWidth;
      }
  });
</script>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


<script>
  window.onscroll = function () {
      const nav = document.querySelector(".navbar");
      if (!nav) {
          return false;
      }
      if (window.pageYOffset > 40) {
          nav.classList.add("nav-on-scroll");
      } else {
          nav.classList.remove("nav-on-scroll");
      }
  };
</script>



</body></html>
