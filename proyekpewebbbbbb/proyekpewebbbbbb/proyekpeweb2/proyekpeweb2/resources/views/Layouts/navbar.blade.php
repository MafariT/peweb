<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <nav
        class="navbar navbar-expand-lg navbar-dark py-3 fixed-top {{ Request::segment(1) == '' ? '' : (auth()->check() ? 'bg-white shadow' : '') }}">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/icons/img-logo-razaka.ico') }}" height="55" width="55" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active @auth text-dark @endauth" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active @auth text-dark @endauth" href="#berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active @auth text-dark @endauth" href="#keunggulan">Keunggulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active @auth text-dark @endauth" href="#paket">Info paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active @auth text-dark @endauth" href="#tentangkami">Tentang kami</a>
                    </li>
                </ul>

                <div class="d-flex">
                    @auth
                        <div class="dropdown">
                            <a class="btn dropdown-toggle text-dark" href="#" role="button" id="userDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle me-1"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="/register" class="btn btn-secondary px-4 py-2 me-2">Daftar</a>
                        <a href="/login" class="btn btn-warning px-4 py-2">Masuk</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</body>

</html>
