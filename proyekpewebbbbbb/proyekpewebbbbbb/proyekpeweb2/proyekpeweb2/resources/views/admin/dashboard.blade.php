@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-100" x-data="{ openTaskMenu: false, openStudentMenu: false, openClassMenu: false }">
    <!-- Main Content -->
    <main class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Dashboard</h2>
            <div class="flex items-center space-x-2">
                <span class="text-gray-700">David Mara</span>
                <img src="{{ asset('assets/icons/profilatas.ico') }}" class="w-10 h-10 rounded-full border" />
            </div>
        </div>
        <!-- Header -->
        <div class="card" style="width: 50rem; background-color: navy; color: white; border-radius: 10px; padding: 20px; border: 2px solid white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); margin-bottom: 20px;">
            <div class="card-body" style="display: flex; gap: 20px; align-items: center;">
                <img src="{{ asset('assets/images/razaka.png') }}" alt="Gambar 2" style="width: 150px; height: auto; border-radius: 8px;">
                <div>
                    <h2 class="card-title"><b>Welcome Back, Admin</b></h2>
                    <p class="card-text">Selamat datang kembali, Admin! Kehadiranmu kembali di</p>
                    <p>Razaka Academy adalah semangat baru bagi kami semua. Semoga</p>
                    <p>energi positif dan inspirasimu terus mengalir seperti biasa</p>
                </div>
            </div>
        </div>

        <!-- Statistik Cards -->
        <div class="grid grid-cols-3 gap-6 mb-6" style="max-width: 700px;">
            <div class="bg-white p-4 rounded-xl shadow ">
                <h3 class="text-sm text-gray-500">Jumlah Bimbel</h3>
                <p class="text-2xl font-bold" style="display: flex; align-items: center; gap: 8px;">
                    3 Bimbel
                    <img src="{{ asset('assets/icons/iconsax.png') }}" alt="Logo" class="w-6 h-6 ml-10"> <!-- icon buku di kanan teks -->
                </p>
            </div>

            <div class="bg-white p-4 rounded-xl shadow ">
                <h3 class="text-sm text-gray-500">Jumlah Siswa</h3>
                <p class="text-2xl font-bold" style="display: flex; align-items: center; gap: 8px;">
                    120 Siswa
                    <img src="{{ asset('assets/icons/iconsax.png') }}" alt="Logo" class="w-6 h-6 ml-10"> <!-- icon buku di kanan teks -->
                </p>
            </div>

            <div class="bg-white p-4 rounded-xl shadow ">
                <h3 class="text-sm text-gray-500">Jumlah Pengajar</h3>
                <p class="text-2xl font-bold" style="display: flex; align-items: center; gap: 8px;">
                    2
                    <img src="{{ asset('assets/icons/iconsax.png') }}" alt="Logo" class="w-6 h-6 ml-20"> <!-- icon buku di kanan teks -->
                </p>
            </div>
        </div>

        <!-- Reminder & Jadwal -->
        <div class="grid grid-cols-3 mb-6">
            <div class="bg-white p-2 rounded-xl shadow" style="width: full;">
                <h4 class="font-semibold mb-2" style="color: red;">Masa Tenggang Siswa</h4>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>@davinanajasabila</li>
                    <li>@davinanajasabila</li>
                    <li>@davinanajasabila</li>
                </ul>
            </div>
            <div class="bg-white p-2 rounded-xl shadow" style="width: full;">
                <h4 class="font-semibold mb-2">Akun Menunggu Validasi</h4>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center gap-3">
                        <img src="{{ asset('assets/icons/profilcewe.ico') }}" alt="Foto Profil" class="w-8 h-8 rounded-full">
                        <span>@davinanajasabila</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <img src="{{ asset('assets/icons/profilcewe.ico') }}" alt="Foto Profil" class="w-8 h-8 rounded-full">
                        <span>@davinanajasabila</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <img src="{{ asset('assets/icons/profilcewe.ico') }}" alt="Foto Profil" class="w-8 h-8 rounded-full">
                        <span>@davinanajasabila</span>
                    </li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded-xl shadow col-span-2 mt-4" style="width: 250px;">
                <h4 class="font-semibold mb-4">Jadwal Kelas Mendatang</h4>

                <div class="space-y-3">
                    <!-- Item 1 -->
                    <div class="flex justify-between items-center">
                        <p class="font-semibold" style="color: orange;">Sesi 1 CPNS</p>
                        <p>10.30-11.30 WIB</p>
                        <p class="font-semibold text-sm text-black-600">25 Mei</p>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex justify-between items-center">
                        <p class="font-semibold" style="color: orange;">Sesi 2 CPNS</p>
                        <p>11.30-12.30 WIB</p>
                        <p class="font-semibold text-sm text-black-600">25 Mei</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik Grafik -->
        <div class="grid grid-cols-2 gap-6">
            <!-- Grafik Garis -->
            <div class="bg-white p-4 rounded-xl shadow">
                <h4 class="font-semibold mb-2">Statistik Tryout</h4>
                <div class="h-40 bg-gray-100 rounded flex items-center justify-center">
                    <img src="{{ asset('assets/images/statistik.png') }}" alt="Grafik Garis" class="h-full object-contain">
                </div>
            </div>

            <!-- Grafik Bar -->
            <div class="bg-white p-4 rounded-xl shadow">
                <h4 class="font-semibold mb-2">Statistik Peserta</h4>
                <div class="h-40 bg-gray-100 rounded flex items-center justify-center">
                    <img src="{{ asset('assets/images/statistikP.png') }}" alt="Grafik Bar" class="h-full object-contain">
                </div>
            </div>
        </div>

    </main>
</div>
@endsection