@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold">Manajemen Materi</h2>
    <div class="flex items-center space-x-2">
        <span class="text-gray-700">David Mara</span>
        <img src="{{ asset('assets/icons/profilatas.ico') }}" class="w-10 h-10 rounded-full border" />
    </div>
</div>

<!-- Main Content -->
<main class="flex-1 p-8 bg-gray-100 min-h-screen">
    <!-- Tombol Tambah Materi -->
    <button onclick="openModal()" class="bg-blue-500 text-white px-4 py-2 rounded"> + Tambah Materi</button>

    <!-- Grid Materi -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @foreach($materi as $item)
        <div class="bg-white rounded-lg shadow p-4">
            <div class="h-32 bg-gray-800 rounded mb-4 flex items-center justify-center text-white text-lg font-bold text-center px-2">
                {{ $item->judul }}
            </div>
            <div class="mb-2 font-semibold">Detail</div>
            <div class="flex space-x-4 text-xl text-blue-600">
                <!-- Detail -->
                <a href="{{ route('admin.materi.show', $item->id) }}" title="Detail">
                    <i class="fas fa-eye"></i>
                </a>
                <!-- Edit -->
                <a href="{{ route('admin.materi.edit', $item->id) }}" title="Edit">
                    <i class="fas fa-edit"></i>
                </a>
                <!-- Hapus -->
                <form action="{{ route('admin.materi.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus materi ini?')" class="inline">
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

    <!-- Modal Form Tambah Materi -->
    <div id="modalForm" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-md relative">
            <button onclick="closeModal()" class="absolute top-2 right-4 text-xl font-bold">×</button>
            <h2 class="text-lg font-semibold mb-4 text-center">Tambah Materi</h2>

            <form action="{{ route('admin.materi.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="block font-medium">Judul Materi</label>
                    <input type="text" name="judul" id="judul" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="block font-medium">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3" class="w-full border rounded px-3 py-2" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="file" class="block text-sm font-medium">File</label>
                    <input type="file" name="file" id="file"
                        class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-4">
                    <label for="link_video" class="block text-sm font-medium">Link Video</label>
                    <input type="text" name="link_video" id="link_video"
                        class="w-full border rounded px-3 py-2">
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