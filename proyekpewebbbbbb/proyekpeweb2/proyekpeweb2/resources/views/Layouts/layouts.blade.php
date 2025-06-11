<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="{{ asset('assets/icons/logo razaka.ico') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <title>Razaka Academy</title>


</head>

<body>

  <!-- Navbar -->
  @include('layouts.navbar')

  <!-- content -->
  @yield('content')


  <section id="tentangkami" style="background-color:rgb(7, 33, 72); color: white; padding: 60px 0;" data-aos="zoom-out">
    <div class="container" style="position: relative;">
      <!-- Baris flex untuk logo + tulisan dan judul -->
      <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 40px;">

        <!-- Logo + tulisan Razaka Academy -->
        <div style="display: flex; align-items: center; gap: 15px;">
          <img src="{{ asset('assets/icons/logo razaka.ico') }}" alt="Logo Razaka Academy" style="width: 70px; height: auto;">
          <span style="font-size: 1.8rem; font-weight: bold; color: white; white-space: nowrap;">
            Razaka Academy
          </span>
        </div>

        <!-- Judul Tentang Kami -->
        <h2 class="fw-bold mb-0">Tentang Kami</h2>
      </div>

      <!-- Maps -->
      <div class="mb-5 text-center">
        <iframe
          src="https://maps.google.com/maps?q=-1.623380228538077,103.5665300518337&z=17&output=embed"
          width="100%"
          height="350"
          style="border:0; border-radius: 15px;"
          allowfullscreen=""
          loading="lazy">
        </iframe>
      </div>

      <!-- 3 Kolom Informasi -->
      <div class="row text-start text-white">
        <!-- Alamat -->
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Alamat</h5>
          <p>Jl. Hibah Ibrahim, Rw. Sari, <br>Kec. Kota Baru, Kota Jambi, <br>Jambi 36361</p>
          <p><strong>Email:</strong> razakaacademy@gmail.com</p>
          <p><strong>Telepon:</strong> +62 8123-456-789</p>
        </div>

        <!-- Layanan -->
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Layanan</h5>
          <ul class="list-unstyled">
            <li>📘 Paket Bimbel CPNS</li>
            <li>📗 Paket Bimbel PPPK</li>
            <li>📕 Paket Bimbel POLRI</li>
          </ul>
        </div>

        <!-- Halaman -->
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Halaman</h5>
          <ul class="list-unstyled">
            <li>🔒 Kebijakan Privasi</li>
            <li>📄 Syarat dan Ketentuan</li>
            <li>💬 Testimoni</li>
          </ul>
        </div>
      </div>

      <!-- Garis Footer -->
      <hr style="border-color: white;">

      <!-- Copyright -->
      <div class="text-center mt-3">
        <p class="mb-0">Copyright 2025, All Reserved by Razaka Academy</p>
      </div>

    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
  </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    const navbar = document.querySelector(".fixed-top");
    window.onscroll = () => {
      if (window.scrollY > 100) {
        navbar.classList.add("scroll-nav-active");
        navbar.classList.add("text-nav-active");
        navbar.classList.remove("navbar-dark");
      } else {
        navbar.classList.remove("scroll-nav-active");
        navbar.classList.add("navbar-dark");
      }
    }

    AOS.init();
  </script>
</body>

</html>