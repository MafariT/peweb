<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::all();
        return view('admin.materi', compact('materi'));
    }
}
