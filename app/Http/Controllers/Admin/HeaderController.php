<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Header; // Jangan lupa import model
use Illuminate\Support\Facades\Storage; // Untuk mengelola file

class HeaderController extends Controller
{
    /**
     * Menampilkan halaman pengaturan header dengan data yang sudah ada.
     */
    public function index()
    {
        // Ambil data header yang pertama kali dibuat, atau buat data kosong baru
        $header = Header::firstOrNew([]);

        return view('header', compact('header')); // Ganti 'nama.file.view.anda'
    }

    /**
     * Menyimpan atau memperbarui data header.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // 1. Validasi Input
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Opsional, maks 2MB
        ]);

        // 2. Cari data header, atau buat instance baru jika belum ada
        $header = Header::firstOrNew([]);

        // 3. Proses Upload Gambar (jika ada)
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($header->image_path && Storage::disk('public')->exists($header->image_path)) {
                Storage::disk('public')->delete($header->image_path);
            }

            // Simpan gambar baru dan dapatkan path-nya
            $path = $request->file('image')->store('headers', 'public');
            $header->image_path = $path;
        }

        // 4. Simpan data teks
        $header->title = $request->title;
        $header->body = $request->body;
        $header->save();

        // 5. Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data header berhasil diperbarui!');
    }
}