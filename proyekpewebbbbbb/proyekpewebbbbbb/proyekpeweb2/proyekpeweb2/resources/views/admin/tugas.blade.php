@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold">Manajemen Tugas</h2>
    <div class="flex items-center space-x-2">
        <span class="text-gray-700">David Mara</span>
        <img src="{{ asset('assets/icons/profilatas.ico') }}" class="w-10 h-10 rounded-full border" />
    </div>
</div>

<main class="flex-1 p-8 bg-gray-100 min-h-screen">
    <!-- Tombol Tambah Tugas -->
    <button onclick="openModal()" class="bg-blue-500 text-white px-4 py-2 rounded">+ Tambah Tugas</button>

    <!-- Daftar Tugas -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @foreach($tugas as $item)
        <div class="bg-white rounded-lg shadow p-4">
            <div class="h-32 bg-gray-800 rounded mb-4 flex items-center justify-center text-white text-lg font-bold text-center px-2">
                {{ $item->judul }}
            </div>
            <div class="mb-2 text-sm text-gray-700">Deadline: {{ \Carbon\Carbon::parse($item->deadline)->format('d M Y') }}</div>
            <div class="flex space-x-4 text-xl text-blue-600">
                <!-- Detail -->
                <a href="{{ route('admin.tugas.show', $item->id) }}" title="Detail">
                    <i class="fas fa-eye"></i>
                </a>
                <!-- Edit -->
                <a href="{{ route('admin.tugas.edit', $item->id) }}" title="Edit">
                    <i class="fas fa-edit"></i>
                </a>
                <!-- Hapus -->
                <form action="{{ route('admin.tugas.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus tugas ini?')" class="inline">
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

    <!-- Modal Tambah Tugas -->
    <div id="modalForm" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-md relative">
            <button onclick="closeModal()" class="absolute top-2 right-4 text-xl font-bold">×</button>
            <h2 class="text-lg font-semibold mb-4 text-center">Tambah Tugas</h2>

            <form action="{{ route('tugas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="block font-medium">Judul Tugas</label>
                    <input type="text" name="judul" id="judul" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="block font-medium">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3" class="w-full border rounded px-3 py-2" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="link_tugas" class="block text-sm font-medium">Link Tugas</label>
                    <input type="text" name="link_tugas" id="link_tugas"
                        class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-4">
                    <label for="deadline" class="block font-medium">Deadline</label>
                    <input type="date" name="deadline" id="deadline" class="w-full border rounded px-3 py-2" required>
                </div>

                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded w-full">Simpan</button>
            </form>
        </div>
    </div>
</main>
@endsection

<script>
    function openModal() {
        document.getElementById('modalForm').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modalForm').classList.add('hidden');
    }
</script>