<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::latest()->get(); // Ambil semua data, urutkan dari yang terbaru
        return view('admin.tentang', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $path = $request->file('image')->store('abouts', 'public');

        About::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $path,
        ]);

        return redirect()->route('tentang.index')->with('success', 'Item baru berhasil ditambahkan!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.tentang_edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $path = $about->image_path; // Gunakan path lama sebagai default

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            Storage::disk('public')->delete($about->image_path);
            // Simpan gambar baru
            $path = $request->file('image')->store('abouts', 'public');
        }

        $about->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $path,
        ]);

        return redirect()->route('tentang.index')->with('success', 'Item berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
         Storage::disk('public')->delete($about->image_path);

        // Hapus data dari database
        $about->delete();

        return redirect()->route('tentang.index')->with('success', 'Item berhasil dihapus!');
    }
}
