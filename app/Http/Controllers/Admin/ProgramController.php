<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $programs = Program::latest()->get(); // Ambil semua data, urutkan dari yang terbaru
        return view('program.index', compact('programs')); 
    }

    /**
     * Menyimpan program baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload
        $path = $request->file('image')->store('programs', 'public');
        $validated['image_path'] = $path;

        Program::create($validated);

        return redirect()->route('program.index')->with('success', 'Program baru berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit program.
     */
    public function edit(Program $program)
    {
        return view('program.edit', compact('program'));
    }

    /**
     * Memperbarui program yang ada di database.
     */
    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($program->image_path) {
                Storage::disk('public')->delete($program->image_path);
            }
            // Simpan gambar baru
            $path = $request->file('image')->store('programs', 'public');
            $validated['image_path'] = $path;
        }

        $program->update($validated);

        return redirect()->route('program.index')->with('success', 'Program berhasil diperbarui.');
    }

    /**
     * Menghapus program dari database.
     */
    public function destroy(Program $program)
    {
        // Hapus gambar dari storage
        if ($program->image_path) {
            Storage::disk('public')->delete($program->image_path);
        }

        $program->delete();

        return redirect()->route('program.index')->with('success', 'Program berhasil dihapus.');
    }
}