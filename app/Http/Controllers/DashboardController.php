<?php

namespace App\Http\Controllers;

// PENTING: Impor semua model yang dibutuhkan
use App\Models\Header;
use App\Models\About;
use App\Models\Program;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard dengan data rangkuman.
     */
    public function index()
    {
        // 1. Ambil data header yang pertama kali dibuat
        $header = Header::first();
        
        // 2. Hitung jumlah item di tabel 'abouts'
        $tentangCount = About::count();
        
        // 3. Hitung jumlah item di tabel 'programs'
        $programCount = Program::count();

        // 4. Kirim semua variabel ke view 'dashboard.blade.php'
        return view('dashboard', compact('header', 'tentangCount', 'programCount'));
    }
}