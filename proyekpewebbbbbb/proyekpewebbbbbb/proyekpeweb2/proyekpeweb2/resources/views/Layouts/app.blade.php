<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Razaka Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="flex min-h-screen bg-gray-100 text-gray-800">
    <!-- Sidebar -->
    <aside class="w-64 bg-[#0E1B4D] text-white flex flex-col justify-between">
        <div class="p-6">
            <h1 class="text-xl font-bold mb-6 flex items-center space-x-2">
                <img src="{{ asset('assets/icons/Kantor.ico') }}" alt="Logo" class="w-6 h-6">
                <span>RAZAKA ACADEMY</span>
            </h1>
            <!-- Dashboard -->
            <nav class="space-y-6">
                <a href="dashboard" class="flex items-center gap-2 hover:text-orange-400">
                    <img src="{{ asset('assets/icons/rumah.ico') }}" alt="Logo" class="w-6 h-6">
                    <span>Dashboard</span>
                </a>
                <nav class="space-y-6" x-data="{ openClassMenu: false, openStudentMenu: false, openTaskMenu: false }">

                    <!-- Manajemen Kelas -->
                    <div class="space-y-1">
                        <button @click="openClassMenu = !openClassMenu" class="flex items-center justify-between w-full hover:text-orange-400">
                            <div class="flex items-center gap-2 hover:text-orange-400">
                                <img src="{{ asset('assets/icons/class.ico') }}" alt="Logo" class="w-6 h-6">
                                <span>Manajemen Kelas</span>
                            </div>
                            <svg :class="{ 'rotate-180': openClassMenu }" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="openClassMenu" x-transition x-cloak class="pl-4 space-y-2 text-sm text-gray-300">
                            <a href="sesi-kelas" class="block hover:text-orange-300">Sesi Kelas</a>
                            <a href="materi" class="block hover:text-orange-300">Materi</a>
                        </div>
                    </div>

                    <!-- Manajemen Siswa -->
                    <div class="space-y-1">
                        <button @click="openStudentMenu = !openStudentMenu" class="flex items-center justify-between w-full hover:text-orange-400">
                            <div class="flex items-center gap-2 hover:text-orange-400">
                                <img src="{{ asset('assets/icons/toga.ico') }}" alt="Logo" class="w-6 h-6">
                                <span>Manajemen Siswa</span>
                            </div>
                            <svg :class="{ 'rotate-180': openStudentMenu }" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="openStudentMenu" x-transition x-cloak class="pl-4 space-y-2 text-sm text-gray-300">
                            <a href="datasiswa" class="block hover:text-orange-300">Data Siswa</a>
                            <a href="validasi" class="block hover:text-orange-300">Validasi</a>
                        </div>
                    </div>

                    <!-- Manajemen Tugas -->
                    <div class="space-y-1">
                        <button @click="openTaskMenu = !openTaskMenu" class="flex items-center justify-between w-full hover:text-orange-400">
                            <div class="flex items-center gap-2 hover:text-orange-400">
                                <img src="{{ asset('assets/icons/task.ico') }}" alt="Logo" class="w-6 h-6">
                                <span>Manajemen Tugas</span>
                            </div>
                            <svg :class="{ 'rotate-180': openTaskMenu }" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="openTaskMenu" x-transition x-cloak class="pl-4 space-y-2 text-sm text-gray-300">
                            <a href="tugas" class="block hover:text-orange-300">Tugas</a>
                            <a href="#" class="block hover:text-orange-300">Riwayat Pengumpulan</a>
                        </div>
                    </div>

                    <!-- Informasi Akun -->
                    @auth
                    <a href="{{ url('akun') }}" class="flex items-center gap-2 hover:text-orange-400">
                        <img src="{{ asset('assets/icons/infoakun.ico') }}" alt="Logo" class="w-6 h-6">
                        <span>Informasi Akun</span>
                    </a>
                    @endauth

                    @guest
                    <a href="{{ route('login') }}" class="flex items-center gap-2 hover:text-orange-400">
                        <img src="{{ asset('assets/icons/infoakun.ico') }}" alt="Logo" class="w-6 h-6">
                        <span>Informasi Akun</span>
                    </a>
                    @endguest
                </nav>

        </div>
        <div class="p-6">
            <a href="#" class="flex items-center gap-2 hover:text-orange-400">
                <img src="{{ asset('assets/icons/logout.ico') }}" alt="Logo" class="w-6 h-6">
                <span>Keluar</span>
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        @yield('content')
    </main>
</body>

</html>