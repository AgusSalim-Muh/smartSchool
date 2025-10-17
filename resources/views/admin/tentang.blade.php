<x-app-layout>
    {{-- Slot untuk judul halaman --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kelola Halaman Tentang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Tampilkan pesan sukses --}}
            @if (session('success'))
                <div class="bg-green-500/10 border border-green-500/20 text-green-300 p-4 rounded-lg" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            {{-- BAGIAN 1: FORM UNTUK MENAMBAH ITEM BARU --}}
            <div class="p-8 bg-slate-800 shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-100 mb-6">
                    Tambah Item Baru
                </h3>
                <form action="{{ route('tentang.store') }}" method="POST" enctype="multipart/form-data" id="add-item-form" class="space-y-6">
                    @csrf
                    
                    {{-- Field Title --}}
                    <div>
                        <label for="title" class="block font-medium text-sm text-gray-300">Title</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full bg-slate-900 border-slate-700 text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" placeholder="Masukkan Title" required>
                    </div>

                    {{-- Field Deskripsi --}}
                    <div>
                        <label for="description" class="block font-medium text-sm text-gray-300">Deskripsi</label>
                        <textarea name="description" id="description" rows="4" class="mt-1 block w-full bg-slate-900 border-slate-700 text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" placeholder="Masukkan Deskripsi" required></textarea>
                    </div>
                    
                    {{-- Field Upload Gambar --}}
                    <div>
                         <label for="image" class="block font-medium text-sm text-gray-300">Upload Gambar</label>
                         <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-slate-700 file:text-gray-300 hover:file:bg-slate-600" required>
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="flex justify-end">
                        <button type="submit" id="save-button" class="px-5 py-2 bg-gray-200 text-gray-800 text-sm font-semibold rounded-md hover:bg-white transition">
                            Simpan Item Baru
                        </button>
                    </div>
                </form>
            </div>

            {{-- BAGIAN 2: DAFTAR ITEM YANG SUDAH ADA --}}
            <div class="p-8 bg-slate-800 shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-100 mb-6">
                    Daftar Item 'Tentang'
                </h3>
                <div class="space-y-4">
                    @forelse ($abouts as $item)
                        <div class="flex items-center gap-6 p-4 bg-slate-900/50 border border-slate-700 rounded-lg">
                            <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" class="w-20 h-20 object-cover rounded-md flex-shrink-0">
                            <div class="flex-grow">
                                <h4 class="font-bold text-gray-100">{{ $item->title }}</h4>
                                <p class="text-sm text-gray-400 mt-1">{{ $item->description }}</p>
                            </div>
                            <div class="flex items-center gap-6 flex-shrink-0">
                                <a href="{{ route('tentang.edit', $item->id) }}" class="text-sm font-medium text-indigo-400 hover:text-indigo-300 transition">Edit</a>
                                <form action="{{ route('tentang.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-sm font-medium text-red-500 hover:text-red-400 transition">Hapus</button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-8 px-4 border-2 border-dashed border-slate-700 rounded-lg">
                            <p class="text-gray-500">Belum ada data yang ditambahkan.</p>
                        </div>
                    @endforelse
                </div>
            </div>
            
        </div>
    </div>

    {{-- Elemen HTML untuk loading overlay (disesuaikan untuk tema gelap) --}}
    <div id="loading-overlay" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center flex-col text-white">
        <div class="w-16 h-16 border-4 border-t-transparent border-white rounded-full animate-spin mb-4"></div>
        <p>Sedang memproses...</p>
    </div>
</x-app-layout>


{{-- JavaScript untuk memicu loading (tidak ada perubahan) --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addItemForm = document.getElementById('add-item-form');
        const saveButton = document.getElementById('save-button');
        const loadingOverlay = document.getElementById('loading-overlay');

        if (addItemForm) {
            addItemForm.addEventListener('submit', function() {
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