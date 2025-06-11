@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold">Validasi Data</h2>
    <div class="flex items-center space-x-2">
        <span class="text-gray-700">David Mara</span>
        <img src="{{ asset('assets/icons/profilatas.ico') }}" class="w-10 h-10 rounded-full border" />
    </div>
</div>

{{-- Search Bar --}}
<div class="mb-4">
    <input type="text" placeholder="Cari"
        class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300">
</div>

{{-- Table --}}
<div class="overflow-auto rounded-lg border bg-white">
    <table class="min-w-full text-sm text-left text-gray-700">
        <thead class="bg-[#1E3A8A] text-white text-sm">
            <tr>
                <th class="px-4 py-3 font-medium">No</th>
                <th class="px-4 py-3 font-medium">Nama</th>
                <th class="px-4 py-3 font-medium">Email</th>
                <th class="px-4 py-3 font-medium">Jenis Bimbel</th>
                <th class="px-4 py-3 font-medium">No. Telepon</th>
                <th class="px-4 py-3 font-medium">Tanggal Daftar</th>
                <th class="px-4 py-3 font-medium">Validasi</th>
                <th class="px-4 py-3 font-medium">Status</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ([
            ['DEBYTA', 'lore@gmail.com', 'CPNS', '081234667890', '20/11/2024'],
            ['DILA MARIDAH', 'lore@gmail.com', 'CPNS', '081234667890', '20/11/2024'],
            ['Rian', 'lore@gmail.com', 'CPNS', '081234667890', '20/11/2024'],
            ['Wulan', 'lore@gmail.com', 'CPNS', '081234667890', '20/11/2024'],
            ['Fadly', 'lore@gmail.com', 'CPNS', '081234667890', '20/11/2024'],
            ['Togar', 'lore@gmail.com', 'PPPK', '081234667890', '20/11/2024'],
            ['melisa dina', 'lore@gmail.com', 'PPPK', '081234667890', '20/11/2024'],
            ['Dela permata', 'lore@gmail.com', 'POLRI', '081234667890', '20/11/2024'],
            ] as $index => $data)
            <tr>
                <td class="px-4 py-3">{{ $index + 1 }}</td>
                <td class="px-4 py-3">{{ $data[0] }}</td>
                <td class="px-4 py-3">{{ $data[1] }}</td>
                <td class="px-4 py-3">{{ $data[2] }}</td>
                <td class="px-4 py-3">{{ $data[3] }}</td>
                <td class="px-4 py-3">{{ $data[4] }}</td>
                <td class="px-4 py-3">
                    <button onclick="openConfirmModal('validasi')" class="bg-[#0D1F4C] text-white text-xs px-3 py-1 rounded-lg">Validasi</button>
                </td>
                <td class="px-4 py-3">
                    <button onclick="openConfirmModal('tolak')" class="bg-[#FFD1D1] text-red-500 text-xs px-3 py-1 rounded-lg">Tolak</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</main>
</div>

{{-- Modal Pop Up --}}
<div id="confirmModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-40 flex items-center justify-center">
    <div class="bg-white w-full max-w-sm rounded-lg shadow-xl relative p-6 text-center">
        <button onclick="closeConfirm()" class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl">&times;</button>
        <div class="flex flex-col items-center justify-center space-y-4">
            <div id="confirmIcon" class="text-5xl">⚠️</div>
            <p id="confirmMessage" class="text-sm font-semibold text-gray-700">Apakah Anda yakin?</p>
            <button id="confirmAction"
                class="px-5 py-2 rounded-md text-white text-sm font-medium transition duration-200"
                onclick="handleConfirmAction()">OK</button>
        </div>
    </div>
</div>

{{-- Script --}}
<script>
    let actionType = '';

    function openConfirmModal(type) {
        const modal = document.getElementById('confirmModal');
        const icon = document.getElementById('confirmIcon');
        const message = document.getElementById('confirmMessage');
        const actionBtn = document.getElementById('confirmAction');

        actionType = type;

        if (type === 'validasi') {
            icon.textContent = '⚠️';
            message.textContent = 'Apakah Anda yakin ingin memvalidasi akun ini?';
            actionBtn.textContent = 'Ya';
            actionBtn.className = 'px-5 py-2 rounded-md text-white bg-blue-900 hover:bg-blue-800';
        } else if (type === 'tolak') {
            icon.textContent = '⚠️';
            message.textContent = 'Apakah Anda yakin ingin menolak?';
            actionBtn.textContent = 'Tolak';
            actionBtn.className = 'px-5 py-2 rounded-md text-white bg-red-400 hover:bg-red-500';
        }

        modal.classList.remove('hidden');
    }

    function closeConfirm() {
        document.getElementById('confirmModal').classList.add('hidden');
    }

    function handleConfirmAction() {
        closeConfirm();
        alert(`Aksi: ${actionType}`); // Ganti ini dengan logic submit ke backend jika dibutuhkan
    }
</script>
@endsection