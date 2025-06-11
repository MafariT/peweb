@extends('layouts.app-nosidebar')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-12 flex flex-col md:flex-row gap-10 items-start">
    <!-- Kiri: Deskripsi Paket -->
    <div class="flex-1">
        <h1 class="text-xl font-semibold text-blue-800">(PPPK) Paket Bimbel SKD PPPK 2025</h1>
        <p class="mt-2 text-gray-600">
            Mulai belajar sekarang untuk meningkatkan pemahaman kamu menghadapi tes seleksi. Manfaatkan fasilitas belajar yang telah kami siapkan secara praktis dan efisien!
        </p>

        <!-- Tentang Paket -->
        <div class="mt-6">
            <h2 class="text-lg font-semibold text-gray-800">Tentang Paket</h2>

            <!-- Deskripsi -->
            <div class="mt-2">
                <h3 class="font-semibold text-gray-700">Deskripsi</h3>
                <p class="text-gray-600 mt-1 text-justify">
                    Persiapkan dirimu menghadapi PPPK 2025 dengan paket bimbel SKD terlengkap! Latihan soal TWK, TIU, dan TKP disusun sesuai kisi-kisi terbaru, lengkap dengan pembahasan dan tryout berkala. Waktunya lolos SKD dengan nilai maksimal!
                </p>
            </div>

            <!-- Apa saja yang kamu dapatkan -->
            <div class="mt-4">
                <h3 class="font-semibold text-gray-700">Apa saja yang kamu dapatkan?</h3>
                <ul class="list-disc list-inside text-gray-600 mt-2 space-y-1">
                    <li>Soal latihan lengkap Tes Wawasan Kebangsaan, Tes Intelegensi Umum, dan Tes Karakteristik Pribadi sesuai kisi-kisi terbaru</li>
                    <li>Simulasi tryout dengan sistem penilaian real-time dan Pembahasan mudah dipahami dan ringkas</li>
                    <li>Update materi sesuai perkembangan tes PPPK 2025</li>
                </ul>
            </div>

            <!-- Tombol -->
            <div class="mt-6 flex gap-4">
                <a href="#" class="px-6 py-2 border border-blue-500 text-blue-600 rounded-full hover:bg-blue-50 transition">
                    Lihat Paket Lainnya
                </a>
                <button onclick="openPopup()" class="px-6 py-2 bg-orange-500 text-white rounded-full hover:bg-orange-600 transition">Beli Paket</button>
            </div>
        </div>
    </div>
    <!-- Pop-up -->
    <div id="popupForm" style="display: none; position: fixed; top: 0; left: 0; 
        width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); 
        display: none; justify-content: center; align-items: center; z-index: 9999;">

        <div style="background: white; padding: 30px; width: 90%; max-width: 400px; 
    border-radius: 16px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); text-align: center; font-family: sans-serif;">

            <h2 style="margin-bottom: 10px;">Daftar Bimbel CPNS</h2>
            <p style="font-size: 14px; margin-bottom: 15px; color: #444;">
                Mohon isikan data diri anda dengan baik dan benar
            </p>

            <form>
                <input type="text" placeholder="Nama Lengkap" required
                    style="width: 100%; margin-top: 10px; padding: 10px; 
        border: 1px solid #ccc; border-radius: 8px; box-sizing: border-box;" />

                <input type="email" placeholder="Email" required
                    style="width: 100%; margin-top: 10px; padding: 10px; 
        border: 1px solid #ccc; border-radius: 8px; box-sizing: border-box;" />

                <input type="tel" placeholder="Nomor Telepon" required
                    style="width: 100%; margin-top: 10px; padding: 10px; 
        border: 1px solid #ccc; border-radius: 8px; box-sizing: border-box;" />

                <select required
                    style="width: 100%; margin-top: 10px; padding: 10px; 
        border: 1px solid #ccc; border-radius: 8px; box-sizing: border-box;">
                    <option value="">--Pilih Metode Pembayaran--</option>
                    <option>BCA Mobile</option>
                    <option>Mandiri Online</option>
                </select>

                <p style="margin-top: 15px; font-weight: bold;">
                    Nomor Rekening BCA Mobile<br>
                    <span style="font-weight: normal;">96690856000000000000</span>
                </p>

                <p style="font-weight: bold;">
                    Total Harga<br>
                    <span style="font-weight: normal;">Rp. 150.000</span>
                </p>

                <button type="submit"
                    style="margin-top: 15px; padding: 10px; width: 100%; border: none;
        border-radius: 8px; background-color: navy; color: white; font-weight: bold; cursor: pointer;">
                    Konfirmasi Pendaftaran
                </button>

                <button type="button" onclick="closePopup()"
                    style="margin-top: 8px; padding: 10px; width: 100%; border: none;
        border-radius: 8px; background-color: #ccc; color: #333; font-weight: bold; cursor: pointer;">
                    Batal
                </button>
            </form>
        </div>
    </div>

    <!-- Script -->
    <script>
        function openPopup() {
            document.getElementById("popupForm").style.display = "flex";
        }

        function closePopup() {
            document.getElementById("popupForm").style.display = "none";
        }
    </script>


    <!-- Kanan: Gambar & Harga -->
    <div class="w-full md:w-[320px] flex-shrink-0">
        <div class="bg-white shadow-md rounded-xl overflow-hidden">
            <img src="{{ asset('assets/images/paketB.png') }}" alt="Paket PPPK" class="w-full h-50 object-cover">

            <div class="p-4 space-y-2">
                <p class="text-sm text-gray-500 font-medium">(PPPK) Paket Bimbel SKD PPPK 2025</p>
                <p class="text-xl font-bold text-blue-800">Rp. 150.000</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="bg-[#0C2D57] text-white mt-16">
    <div class="max-w-7xl mx-auto px-6 py-10 grid md:grid-cols-3 gap-10">
        <!-- Kolom 1: Logo & Kontak -->
        <div>
            <div class="flex items-center gap-3 mb-4">
                <img src="{{ asset('assets/icons/img-logo-razaka.ico') }}" alt="Razaka Logo" class="w-10 h-10">
                <span class="text-xl font-bold">Razaka Academy</span>
            </div>
            <ul class="text-sm space-y-2">
                <li>
                    <a href="mailto:razakaacademy@gmail.com" class="hover:underline">
                        razakaacademy@gmail.com
                    </a>
                </li>
                <li>
                    Jl. Hibbah Ibrahim, RW. Sari, Kec. Kota Baru, Kota Jambi, Jambi 36381
                </li>
                <li>
                    +62 8123-456-789
                </li>
            </ul>

            <!-- Sosial Media -->
            <div class="mt-4 text-lg flex gap-4">
                <a href="#" class="hover:text-gray-300">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="hover:text-gray-300">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="hover:text-gray-300">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
        </div>

        <!-- Kolom 2: Layanan -->
        <div>
            <h4 class="text-lg font-semibold mb-3">Layanan</h4>
            <ul class="text-sm space-y-2">
                <li><a href="#" class="hover:underline">Bimbel CPNS</a></li>
                <li><a href="#" class="hover:underline">Bimbel PPPK</a></li>
                <li><a href="#" class="hover:underline">Bimbel POLRI</a></li>
            </ul>
        </div>

        <!-- Kolom 3: Halaman -->
        <div>
            <h4 class="text-lg font-semibold mb-3">Halaman</h4>
            <ul class="text-sm space-y-2">
                <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
                <li><a href="#" class="hover:underline">Syarat dan Ketentuan</a></li>
                <li><a href="#" class="hover:underline">Testimoni</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-gray-700 text-center text-sm py-4 px-6">
        © Copyright 2025, All Reserved by Razaka Academy
    </div>
</footer>

@endsection