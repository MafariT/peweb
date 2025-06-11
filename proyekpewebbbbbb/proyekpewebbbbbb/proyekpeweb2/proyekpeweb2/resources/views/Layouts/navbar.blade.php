<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top {{ Request::segment(1) == '' ? '': 'bg-white shadow'}}">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/icons/img-logo-razaka.ico') }}" height="55" width="55" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#berita">Berita </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#keunggulan">Keunggulan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#paket">Info paket </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#tentangkami">Tentang kami</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="/register" class="btn btn-secondary px-4 py-2 me-2">Daftar</a>
                <a href="/login" class="btn btn-warning px-4 py-2">Masuk</a>
            </div>
        </div>
    </div>
</nav>