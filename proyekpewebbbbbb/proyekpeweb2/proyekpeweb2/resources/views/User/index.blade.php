<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Tryout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f2f2f2;
        }

        .login-section {
            min-height: 100vh;
            display: flex;
        }

        .left-panel {
            background-color: #e8f6fc;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .left-panel h3 {
            font-weight: bold;
            color: #1d1d1d;
        }

        .right-panel {
            background-color: #0D2B64;
            color: white;
            padding: 60px 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-wrapper {
            width: 100%;
            max-width: 400px;
        }

        .form-control {
            border-radius: 10px;
        }

        .login-btn {
            background-color: #f5a623;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 10px;
        }

        .login-btn:hover {
            background-color: #e59412;
        }

        .form-label {
            margin-bottom: 5px;
        }

        .small-link {
            font-size: 0.85rem;
            color: #ddd;
        }

        .small-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div id="login" class="container-fluid login-section">
        <div class="row w-100">
            <!-- Bagian kiri -->
            <div class="col-md-6 left-panel">
                <div class="text-center">
                    <img src="{{ asset('assets/images/img-login1.avif') }}" alt="Ilustrasi" style="max-width: 300px;">
                    <h3 class="mt-4">Belajar jadi lebih mudah dan terarah</h3>
                </div>
            </div>

            <!-- Bagian kanan -->
            <div class="col-md-6 right-panel">
                <div class="form-wrapper">
                    <h2 class="fw-bold mb-2">Selamat Datang Kembali!</h2>
                    <p class="mb-4">Mulailah mengerjakan tryoutmu!</p>

                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                            <div class="text-end mt-1">
                                <a href="#" class="small-link">Lupa Password?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn login-btn w-100 mt-3">Masuk</button>
                    </form>

                    <div class="text-center mt-4">
                        <p class="text-light">Belum punya akun? <a href="/register" class="text-warning fw-semibold">Daftar Sekarang!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>