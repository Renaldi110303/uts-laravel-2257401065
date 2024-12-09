<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $nama = "Renaldi";
        $kelas = "MI22A";
        $nim = "2257401065";

        return view('welcome', compact('nama', 'kelas', 'nim'));
    }


    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard()
    {
        $nama = "Renaldi";
        $kelas = "MI22A";
        $nim = "2257401065";

        return view('dashboard', compact('nama', 'kelas', 'nim'));
    }
}
