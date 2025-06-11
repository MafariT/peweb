<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    // Tampilkan semua tugas
    public function index()
    {
        $tugas = Tugas::all();
        return view('admin.tugas', compact('tugas')); // ganti 'tugas' jika nama file Blade-mu berbeda
    }

    // Simpan tugas baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
        ]);

        Tugas::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline,
        ]);

        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil ditambahkan.');
    }

    // Tampilkan detail tugas
    public function show($id)
    {
        $tugas = Tugas::findOrFail($id);
        return view('tugas_show', compact('tugas'));
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $tugas = Tugas::findOrFail($id);
        return view('tugas_edit', compact('tugas'));
    }

    // Update data tugas
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
        ]);

        $tugas = Tugas::findOrFail($id);
        $tugas->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline,
        ]);

        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil diperbarui.');
    }

    // Hapus tugas
    public function destroy($id)
    {
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();

        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil dihapus.');
    }
}
