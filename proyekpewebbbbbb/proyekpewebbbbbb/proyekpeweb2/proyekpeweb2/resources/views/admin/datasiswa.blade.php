@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold">Data Siswa</h2>
    <div class="flex items-center space-x-2">
        <span class="text-gray-700">David Mara</span>
        <img src="{{ asset('assets/icons/profilatas.ico') }}" class="w-10 h-10 rounded-full border" />
    </div>
</div>

<!-- Search Bar -->
<div class="mb-4">
    <input
        type="text"
        placeholder="Cari"
        class="w-full p-2 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
</div>

<!-- Table Wrapper -->
<div class="bg-white rounded-xl shadow overflow-auto">
    <table class="min-w-full text-sm divide-y divide-gray-200">
        <thead class="bg-gray-100 text-left text-gray-600 font-semibold">
            <tr>
                <th class="p-3">No</th>
                <th class="p-3">Nama</th>
                <th class="p-3">Email</th>
                <th class="p-3">Jenis Bimbel</th>
                <th class="p-3">No. Telepon</th>
                <th class="p-3">Kelas</th>
                <th class="p-3">Status Akun</th>
                <th class="p-3">Masa Aktif</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($siswa as $i => $item)
            <tr class="hover:bg-gray-50">
                <td class="p-3">{{ $i + 1 }}</td>
                <td class="p-3">{{ $item->nama }}</td>
                <td class="p-3">{{ $item->email }}</td>
                <td class="p-3">{{ $item->jenis_bimbel }}</td>
                <td class="p-3">{{ $item->telepon }}</td>
                <td class="p-3">{{ $item->kelas }}</td>
                <td class="p-3">
                    <span class="px-2 py-1 rounded text-white bg-green-500 text-xs font-medium">
                        {{ $item->status }}
                    </span>
                </td>
                <td class="p-3">{{ $item->masa_aktif }}</td>
                <td class="p-3 space-x-2">
                    <button onclick="openEditModal('{{ $item->nama }}')"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 text-xs rounded">Edit</button>
                    <button onclick="openDeleteModal('{{ $item->nama }}')"
                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-xs rounded">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Modal Edit -->
<div id="editModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white w-full max-w-md rounded-lg p-6 relative shadow-xl">
        <button onclick="closeEditModal()" class="absolute top-3 right-3 text-xl text-gray-600 hover:text-black">&times;</button>
        <h2 class="text-lg font-semibold mb-4 text-center">Edit Data Siswa</h2>

        <form id="editForm">
            <div class="space-y-3">
                <div>
                    <label class="block text-sm font-medium">Nama</label>
                    <input type="text" id="editNama" class="w-full border rounded px-3 py-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input type="email" id="editEmail" class="w-full border rounded px-3 py-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Jenis Bimbel</label>
                    <input type="text" id="editBimbel" class="w-full border rounded px-3 py-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Telepon</label>
                    <input type="text" id="editTelepon" class="w-full border rounded px-3 py-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Kelas</label>
                    <input type="text" id="editKelas" class="w-full border rounded px-3 py-2" />
                </div>
                <div class="text-center mt-4">
                    <button type="button" onclick="submitEdit()"
                        class="bg-blue-700 hover:bg-blue-800 text-white px-6 py-2 rounded">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Hapus -->
<div id="deleteModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white w-full max-w-sm rounded-lg shadow-xl relative p-6 text-center">
        <button onclick="closeDeleteModal()" class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl">&times;</button>
        <div class="text-4xl text-red-400 mb-2">⚠️</div>
        <p id="deleteMessage" class="text-sm font-semibold text-gray-700">Apakah Anda yakin ingin menghapus data ini?</p>
        <div class="mt-4">
            <button onclick="confirmDelete()"
                class="px-5 py-2 rounded-md bg-red-500 hover:bg-red-600 text-white text-sm font-medium">Hapus</button>
        </div>
    </div>
</div>

<!-- Pagination (Opsional) -->
<div class="flex justify-center mt-6 space-x-2">
    <button class="px-3 py-1 bg-gray-200 rounded">1</button>
    <button class="px-3 py-1 bg-white border rounded">2</button>
    <button class="px-3 py-1 bg-white border rounded">→</button>
</div>

<!-- Script Modal -->
<script>
    function openEditModal(item) {
        document.getElementById('editNama').value = item.nama;
        document.getElementById('editEmail').value = item.email;
        document.getElementById('editBimbel').value = item.jenis_bimbel;
        document.getElementById('editTelepon').value = item.telepon;
        document.getElementById('editKelas').value = item.kelas;
        document.getElementById('editModal').classList.remove('hidden');
    }

    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
    }

    function submitEdit() {
        closeEditModal();
        alert('Perubahan disimpan (simulasi)');
    }

    function openDeleteModal(nama) {
        document.getElementById('deleteMessage').textContent = `Apakah Anda yakin ingin menghapus data "${nama}"?`;
        document.getElementById('deleteModal').classList.remove('hidden');
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }

    function confirmDelete() {
        closeDeleteModal();
        alert('Data berhasil dihapus (simulasi)');
    }
</script>
@endsection