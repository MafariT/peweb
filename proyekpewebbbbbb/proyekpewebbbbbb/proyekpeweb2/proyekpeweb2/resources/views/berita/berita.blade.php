@extends('layouts.layouts')

@section('content')
<section id="berita" style="margin-top:100px;">
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
                        <a href="#" class="text-decoration-none text-warning">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="footer-berita text-center">
            <a href="#" class="btn btn-outline-danger">Berita Lainnya</a>
        </div>
    </div>
</section>
@endsection