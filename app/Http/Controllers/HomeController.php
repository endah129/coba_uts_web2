<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination; // PENTING: Import Model yang baru Anda buat!

class HomeController extends Controller
{
    public function home()
    {
        // 1. Ambil data dari Model
        $destinations = Destination::getAll();

        // 2. Ambil hitungan data dari Model (Implementasi function COUNT - Soal No. 4)
        $totalCount = Destination::countAll();

        // 3. Gabungkan ketiganya (M-V-C) dan kirim ke View
        return view('home', compact('destinations', 'totalCount'));
    }

    public function about()
    {
        return view('about');
    }
}