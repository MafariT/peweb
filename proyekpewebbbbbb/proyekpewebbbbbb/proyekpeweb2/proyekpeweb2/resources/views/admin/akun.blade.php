@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row gap-6">
    <!-- Sidebar Profil -->
    <div class="w-full md:w-1/4 bg-white rounded-xl shadow p-4 text-center">
        <img src="{{ asset('assets/icons/profilatas.ico') }}" class="w-10 h-10 rounded-full border" />
        <h3 class="mt-2 font-semibold text-lg">David Mera</h3>
        <p class="text-sm text-gray-500">davidmera03@gmail.com</p>
        <button class="mt-4 bg-orange-500 text-white px-4 py-1 rounded hover:bg-orange-600">Keluar</button>
    </div>

    <!-- Form Data Akun -->
    <div class="w-full md:w-3/4 bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-bold mb-4">Data Informasi Akun</h2>

        <!-- Profil -->
        <div class="space-y-4">
            <h3 class="font-semibold text-lg border-b pb-1">🧑 Profil</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium">Nama</label>
                    <input type="text" value="David Mera" class="w-full border rounded p-2 focus:outline-none focus:ring focus:ring-blue-400" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input type="email" value="davidmera03@gmail.com" class="w-full border rounded p-2 focus:outline-none focus:ring focus:ring-blue-400" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Telepon</label>
                    <input type="text" value="089845328888" class="w-full border rounded p-2 focus:outline-none focus:ring focus:ring-blue-400" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Tanggal Lahir</label>
                    <input type="text" placeholder="hh/bb/tttt" class="w-full border rounded p-2 focus:outline-none focus:ring focus:ring-blue-400" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Jenis Kelamin</label>
                    <select class="w-full border rounded p-2 focus:outline-none focus:ring focus:ring-blue-400">
                        <option>-- Pilih Jenis Kelamin --</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>
            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                Simpan Perubahan Profil
            </button>
        </div>

        <!-- Ubah Password -->
        <div class="mt-10 space-y-4">
            <h3 class="font-semibold text-lg border-b pb-1">🔐 Ubah Password</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium">Password Sekarang</label>
                    <input type="password" placeholder="Masukkan Password Sekarang" class="w-full border rounded p-2 focus:outline-none focus:ring focus:ring-blue-400" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Password Baru</label>
                    <input type="password" placeholder="Masukkan Password Baru" class="w-full border rounded p-2 focus:outline-none focus:ring focus:ring-blue-400" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Konfirmasi Password Baru</label>
                    <input type="password" placeholder="Konfirmasi Password Baru" class="w-full border rounded p-2 focus:outline-none focus:ring focus:ring-blue-400" />
                </div>
            </div>
            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                Simpan Perubahan Password
            </button>
        </div>
    </div>
</div>
@endsection