<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('admin.sesi-kelas', [
            'kelas' => Kelas::all()
        ]);
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        Kelas::create($request->only('nama'));
        return redirect()->route('kelas.index')->with('success', 'Sesi berhasil ditambahkan!');
    }

    public function show(Kelas $kelas)
    {
        return view('kelas.show', compact('kelas'));
    }

    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, Kelas $kelas)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $kelas->update($request->only('nama'));
        return redirect()->route('kelas.index')->with('success', 'Sesi berhasil diperbarui!');
    }

    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect()->route('kelas.index')->with('success', 'Sesi berhasil dihapus!');
    }
}
