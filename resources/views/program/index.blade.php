{{-- resources/views/program/index.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kelola Program') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            @if (session('success'))
                <div class="bg-green-500/10 border border-green-500/20 text-green-300 p-4 rounded-lg" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            {{-- FORM UNTUK MENAMBAH ITEM BARU --}}
            <div class="p-8 bg-slate-800 shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-100 mb-6">Tambah Program Baru</h3>
                {{-- (PERUBAHAN) Menambahkan ID pada form --}}
                <form action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data" id="add-program-form" class="space-y-6">
                    @csrf
                    <div>
                        <label for="title" class="block font-medium text-sm text-gray-300">Title</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full bg-slate-900 border-slate-700 text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="description" class="block font-medium text-sm text-gray-300">Deskripsi</label>
                        <textarea name="description" id="description" rows="4" class="mt-1 block w-full bg-slate-900 border-slate-700 text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required></textarea>
                    </div>
                    <div>
                         <label for="image" class="block font-medium text-sm text-gray-300">Upload Gambar</label>
                         <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-slate-700 file:text-gray-300 hover:file:bg-slate-600" required>
                    </div>
                    <div class="flex justify-end">
                        {{-- (PERUBAHAN) Menambahkan ID pada tombol --}}
                        <button type="submit" id="save-button" class="px-5 py-2 bg-gray-200 text-gray-800 text-sm font-semibold rounded-md hover:bg-white transition">Simpan Program</button>
                    </div>
                </form>
            </div>

            {{-- DAFTAR ITEM YANG SUDAH ADA (Tidak ada perubahan di sini) --}}
            <div class="p-8 bg-slate-800 shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-100 mb-6">Daftar Program</h3>
                <div class="space-y-4">
                    @forelse ($programs as $program)
                        <div class="flex items-center gap-6 p-4 bg-slate-900/50 border border-slate-700 rounded-lg">
                            <img src="{{ asset('storage/' . $program->image_path) }}" alt="{{ $program->title }}" class="w-20 h-20 object-cover rounded-md flex-shrink-0">
                            <div class="flex-grow">
                                <h4 class="font-bold text-gray-100">{{ $program->title }}</h4>
                                <p class="text-sm text-gray-400 mt-1">{{ $program->description }}</p>
                            </div>
                            <div class="flex items-center gap-6 flex-shrink-0">
                                <a href="{{ route('program.edit', $program->id) }}" class="text-sm font-medium text-indigo-400 hover:text-indigo-300 transition">Edit</a>
                                <form action="{{ route('program.destroy', $program->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus program ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-sm font-medium text-red-500 hover:text-red-400 transition">Hapus</button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-8 px-4 border-2 border-dashed border-slate-700 rounded-lg">
                            <p class="text-gray-500">Belum ada program yang ditambahkan.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    {{-- (TAMBAHAN) Elemen HTML untuk loading overlay --}}
    <div id="loading-overlay" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center flex-col text-white">
        <div class="w-16 h-16 border-4 border-t-transparent border-white rounded-full animate-spin mb-4"></div>
        <p>Sedang memproses...</p>
    </div>
</x-app-layout>

{{-- (TAMBAHAN) JavaScript untuk memicu loading --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addProgramForm = document.getElementById('add-program-form');
        const saveButton = document.getElementById('save-button');
        const loadingOverlay = document.getElementById('loading-overlay');

        if (addProgramForm) {
            addProgramForm.addEventListener('submit', function() {
                if (loadingOverlay) {
                    loadingOverlay.style.display = 'flex';
                }
                if (saveButton) {
                    saveButton.disabled = true;
                    saveButton.innerText = 'Menyimpan...';
                }
            });
        }
    });
</script>