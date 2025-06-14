<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user(); // Ambil data user dari session
        return view('welcome', compact('user'));
    }
}
