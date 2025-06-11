<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    // Menampilkan daftar siswa
    public function index()
    {
        $siswa = [
            (object)[
                'nama' => 'Siti Mariah',
                'email' => 'lorem@gmail.com',
                'jenis_bimbel' => 'PPPK',
                'telepon' => '08123456789',
                'kelas' => 'Tidak Ada',
                'status' => 'Aktif',
                'masa_aktif' => '20/11/2024',
            ],
            (object)[
                'nama' => 'Andi Pratama',
                'email' => 'andi@gmail.com',
                'jenis_bimbel' => 'PPPK',
                'telepon' => '08123456781',
                'kelas' => 'Sesi 1',
                'status' => 'Aktif',
                'masa_aktif' => '21/11/2024',
            ],
            (object)[
                'nama' => 'Dewi Lestari',
                'email' => 'dewi@gmail.com',
                'jenis_bimbel' => 'PPPK',
                'telepon' => '08123456782',
                'kelas' => 'Sesi 2',
                'status' => 'Aktif',
                'masa_aktif' => '22/11/2024',
            ],
        ];

        return view('admin.datasiswa', compact('siswa'));
    }
}
