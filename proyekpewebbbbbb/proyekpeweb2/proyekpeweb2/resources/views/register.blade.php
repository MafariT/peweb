<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Daftar Akun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f0f0;
    }

    .form-container {
      background-color: #0b1c36;
      color: white;
      border-radius: 10px;
      padding: 40px;
    }

    .form-control::placeholder {
      color: #999;
    }

    .btn-orange {
      background-color: #f57c00;
      color: white;
    }

    .btn-orange:hover {
      background-color: #e96a00;
    }
  </style>
</head>

<body>

  <div id="Register" class="container vh-100 d-flex align-items-center">
    <div class="row w-100">
      <!-- Kiri -->
      <div class="col-md-6 d-flex flex-column justify-content-center">
        <h3 class="fw-bold">Tingkatkan Pengetahuanmu<br>bersama Razaka Academy</h3>
        <p>Ikuti try out online kami dan dapatkan bantuan dari tutor berpengalaman untuk meraih tujuan akademismu.</p>
        <img src="/assets/images/img-login1.avif" class="img-fluid" alt="Ilustrasi belajar">
      </div>

      <!-- Kanan -->
      <div class="col-md-6">
        <div class="form-container shadow">
          <h4 class="fw-bold">Daftar Akun</h4>
          <p>Mulailah mengerjakan tryoutmu!</p>
          <form action="/register" method="POST">
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Telepon</label>
              <input type="text" class="form-control" placeholder="08xxxx" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="mb-4">
              <label class="form-label">Konfirmasi Password</label>
              <input type="password" class="form-control" placeholder="Konfirmasi Password" required>
            </div>
            <a href="#" type="submit" class="btn btn-orange w-100">Daftar</a>
            <div class="text-center mt-3">
              Sudah punya akun? <a href="/login" class="text-warning">Login di sini</a>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

</body>

</html>