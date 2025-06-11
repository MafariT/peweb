@extends('layouts.layouts')

<!-- HERO SECTION -->
<section id="hero" class="py-5" data-aos="flip-down">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center text-center">
      <div class="col-lg-6">
        <h1 class="fw-bold mb-2">Jadikan Belajarmu Lebih Seru Bersama Razaka Academy</h1>
        <p class="mb-3">
          Jangan sampai kehilangan kesempatan lulus seleksi PPPK! Wujudkan impianmu lulus seleksi di tahun ini.
        </p>
        <a href="/register" class="btn btn-outline-warning">
          Ayo Daftarkan Dirimu
        </a>


      </div>
      <div class="col-lg-6">
        <img src="{{ asset('assets/images/img-7.png') }}" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>

<!-- PROGRAM SECTION -->
<section id="program" style="margin-top: -30px;">
  <div class="container">
    <div class="row">
      @php
      $programs = [
      ['title' => 'Pembelajaran PPPK', 'icon' => 'img-6.ico'],
      ['title' => 'Tryout Seputar PPPK', 'icon' => 'IMG-7.ico'],
      ['title' => 'Materi-Materi PPPK', 'icon' => 'img-8.ico'],
      ['title' => 'Konsultasi Dengan Ahli', 'icon' => 'img-9.ico'],
      ];
      @endphp
      @foreach($programs as $program)
      <div class="col-lg-3" data-aos="flip-left">
        <div class="bg-white rounded-3 p-3 shadow d-flex align-items-center">
          <div>
            <h4>{{ $program['title'] }}</h4>
          </div>
          <img src="{{ asset('assets/icons/' . $program['icon']) }}" height="55" width="55" alt="">
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- BERITA SECTION -->
<section id="berita">
  <div class="container py-5">
    <div class="header-berita text-center">
      <h2 class="fw-bold">Berita Terkait Razaka Academy</h2>
    </div>
    <div class="row py-5" data-aos="flip-up">
      @php
      $beritas = [
      ['img' => 'img-10.jpg', 'tgl' => '25-04-2025', 'judul' => 'LPPM Universitas Jambi Bekerja Sama Dengan Razaka Academy Mengadakan Sharing Session Persiapan Tes CASN.'],
      ['img' => 'img-11.jpg', 'tgl' => '22-04-2025', 'judul' => 'Sharing Session Ujian PPPK Untuk Dosen Non ASN Dan Tendik Fakultas Pertanian UNJA'],
      ['img' => 'img-12.jpg', 'tgl' => '06-05-2025', 'judul' => 'Silaturahmi Fakultas Hukum UNAJA Dengan Razaka Academy'],
      ];
      @endphp
      @foreach($beritas as $berita)
      <div class="col-lg-4">
        <div class="card border-0">
          <img src="{{ asset('assets/images/' . $berita['img']) }}" class="img-fluid" alt="">
          <div class="konten-berita">
            <p class="mb-3 text-secondary">{{ $berita['tgl'] }}</p>
            <h4 class="fw-bold mb-3">{{ $berita['judul'] }}</h4>
            <p class="text-secondary">#PersiapanbersamaRazaka</p>
            <a href="#" class="text-decoration-none text-danger">Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="footer-berita text-center">
      <a href="/berita" class="btn btn-outline-warning">Berita Lainnya</a>
    </div>
  </div>
</section>

<!-- KEUNGGULAN SECTION -->
<section class="py-5 bg-white" data-aos="zoom-in" id="keunggulan">
  <div class="text-center mb-5">
    <h2 class="fw-bold text-dark">Bersama <span class="text-warning">Razaka Academy</span><br>bikin Belajarmu makin Seru!</h2>
    <p class="mt-2 text-muted">Temukan Pengalaman Belajar yang Intens dan Inspiratif dengan Razaka Academy</p>
  </div>

  <div class="container">
    <div class="row justify-content-center g-4">
      @php
      $features = [
      ['title' => 'Kisi-kisi<br>Ter-update', 'desc' => 'Belajar materi yang pasti-pasti aja dan tentunya sesuai kisi-kisi terbaru', 'icon' => 'book.png', 'bg' => 'Ellipse 10.png'],
      ['title' => 'Evaluasi<br>Detail', 'desc' => 'Evaluasi hasil try out kamu dengan grafik informasi super detail', 'icon' => 'evaluate.png', 'bg' => 'Ellipse 11.png'],
      ['title' => 'Try<br>Out', 'desc' => 'Soal Try Out sesuai kisi-kisi terbaru lengkap dengan pembahasannya', 'icon' => 'Study.png', 'bg' => 'Ellipse 12.png'],
      ['title' => 'Belajar<br>Fleksibel', 'desc' => 'Akses Try Out dimanapun dan kapanpun', 'icon' => 'Digital Signature.png', 'bg' => 'Ellipse 13.png'],
      ];
      @endphp
      @foreach($features as $item)
      <div class="col-md-3 text-center">
        <div class="mb-3 position-relative mx-auto" style="width: 55px; height: 55px;">
          <img src="{{ asset('assets/icons/' . $item['bg']) }}" width="55" height="55" alt="Ellipse">
          <img src="{{ asset('assets/icons/' . $item['icon']) }}" class="position-absolute top-50 start-50 translate-middle" width="30" height="30" alt="Icon">
        </div>
        <h5 class="fw-semibold text-primary">{!! $item['title'] !!}</h5>
        <p class="text-muted">{{ $item['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- PAKET BIMBEL SECTION -->
<style>
  .list-item {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    margin-bottom: 8px;
  }
</style>

<div class="container text-center" data-aos="zoom-in-up" id="paket">
  <h2 class="fw-bold">Paket Bimbel</h2>
  <h2 class="fw-bold">Razaka Academy</h2>
  <p>Pilih paket yang paling sesuai untuk mendukung persiapan seleksi kamu!</p>

  <div class="row justify-content-center mt-4">
    <!-- Paket PPPK -->
    <div class="col-md-7 mb-7">
      <div class="card h-100 shadow rounded-4">
        <div class="card-body text-center bg-light rounded-top-4">
          <h5 class="fw-bold text-primary">PAKET BIMBEL PPPK</h5>
          <h4 class="fw-bold text-dark">Rp. 150.000</h4>
        </div>
        <div class="card-body text-start text-dark">
          <p>
            Dirancang khusus untuk calon guru dan tenaga teknis PPPK!
            Berisi materi kompetensi teknis, manajerial, dan sosial kultural.
          </p>
          <div class="row">
            <div class="col-6">
              <div class="list-item">✅ <div>Materi lengkap kompetensi bidang</div>
              </div>
              <div class="list-item">✅ <div>Latihan soal PPPK sesuai SKB</div>
              </div>
            </div>
            <div class="col-6">
              <div class="list-item">✅ <div>Tips lulus wawancara</div>
              </div>
              <div class="list-item">✅ <div>E-book + video pembelajaran</div>
              </div>
            </div>
          </div>
          <a href="paketpppk" class="btn btn-warning w-100 rounded-pill mt-3">Beli Paket</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Register -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Daftar Akun</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <!-- Tambah field lainnya kalau ada -->
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Daftar</button>
        </div>
      </form>
    </div>
  </div>
</div>

@section('content')