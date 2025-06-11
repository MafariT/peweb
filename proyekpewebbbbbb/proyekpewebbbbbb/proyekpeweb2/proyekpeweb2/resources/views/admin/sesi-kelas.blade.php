@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold">Manajemen sesi kelas</h2>
    <div class="flex items-center space-x-2">
        <span class="text-gray-700">David Mara</span>
        <img src="{{ asset('assets/icons/profilatas.ico') }}" class="w-10 h-10 rounded-full border" />
    </div>
</div>

<!-- Main Content -->
<main class="flex-1 p-8 bg-gray-100 min-h-screen">
    <!-- Tombol Tambah Sesi -->
    <button onclick="openModal()" class="bg-blue-500 text-white px-4 py-2 rounded"> + Tambah Sesi</button>

    <!-- Grid Sesi Kelas -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($kelas as $item)
        <div class="bg-white rounded-lg shadow p-4">
            <div class="h-32 bg-gray-800 rounded mb-4 flex items-center justify-center text-white text-lg font-bold">
                {{ $item->nama }}
            </div>
            <div class="mb-2 font-semibold">Detail</div>
            <div class="flex space-x-4 text-xl text-blue-600">
                <!-- Detail -->
                <a href="{{ route('kelas.show', $item->id) }}" title="Detail">
                    <i class="fas fa-eye"></i>
                </a>
                <!-- Edit -->
                <a href="{{ route('kelas.edit', $item->id) }}" title="Edit">
                    <i class="fas fa-edit"></i>
                </a>
                <!-- Hapus -->
                <form action="{{ route('kelas.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="Hapus" class="text-red-500">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Modal Form -->
    <div id="modalForm" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-md relative">
            <button onclick="closeModal()" class="absolute top-2 right-4 text-xl font-bold">×</button>
            <h2 class="text-lg font-semibold mb-4 text-center">Tambah Sesi Kelas</h2>

            <form action="{{ route('kelas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_kelas" class="block font-medium">Nama</label>
                    <input type="text" name="nama_kelas" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-3">
                    <label class="block font-medium">Hari</label>
                    <div class="grid grid-cols-3 gap-2">
                        @foreach (['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'] as $hari)
                        <label class="inline-flex items-center">
                            <input type="radio" name="hari" value="{{ $hari }}" class="mr-1" required> {{ $hari }}
                        </label>
                        @endforeach
                    </div>
                </div>

                <div class="mb-4">
                    <label for="kuota" class="block font-medium">Kuota Siswa</label>
                    <input type="number" name="kuota" class="w-full border rounded px-3 py-2" required>
                </div>

                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded w-full">Simpan</button>
            </form>
        </div>
    </div>
</main>
</div>
@endsection
<script>
    function openModal() {
        document.getElementById('modalForm').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modalForm').classList.add('hidden');
    }
</script>