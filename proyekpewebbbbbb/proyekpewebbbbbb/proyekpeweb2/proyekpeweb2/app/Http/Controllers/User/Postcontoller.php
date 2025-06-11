<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\view\View;
use app\Models\User;

class Postcontoller extends Controller
{
    //membuat metode menampilkan halaman login 

    public function index(): view
    {
        $user = User::latest();
        return view('user.index', compact('user'));
    }
}
