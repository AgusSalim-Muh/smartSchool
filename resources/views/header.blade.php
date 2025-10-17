<x-app-layout>
    {{-- Slot untuk judul halaman (disesuaikan untuk dark mode) --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pengaturan Header') }}
        </h2>
    </x-slot>

    {{-- Konten utama halaman --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-100">

                    {{-- Tampilkan pesan sukses jika ada (gaya dark mode) --}}
                    @if (session('success'))
                        <div class="mb-6 bg-green-500/10 border border-green-500/20 text-green-300 px-4 py-3 rounded-lg" role="alert">
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    {{-- Formulir untuk mengirim data --}}
                    <form action="{{ route('admin.header.store') }}" method="POST" enctype="multipart/form-data" id="header-form">
                        @csrf

                        <div class="flex flex-col md:flex-row gap-8">
                            {{-- KOLOM KIRI: UPLOAD GAMBAR --}}
                            <div class="flex-1 flex flex-col items-center justify-center p-8 bg-slate-900/50 border-2 border-dashed border-slate-700 rounded-lg transition-colors hover:border-indigo-500">
                                
                                <img src="{{ $header->image_path ? asset('storage/' . $header->image_path) : '' }}" 
                                     alt="Pratinjau Gambar" 
                                     id="image-preview"
                                     class="max-h-52 w-auto rounded-lg object-cover mb-4 border border-slate-700 {{ !$header->image_path ? 'hidden' : '' }}">
                                
                                <label for="image-upload" class="inline-block bg-slate-700 text-gray-300 font-semibold py-2 px-5 rounded-lg cursor-pointer transition-colors hover:bg-slate-600">
                                    Unggah File
                                </label>
                                <input type="file" name="image" id="image-upload" class="hidden" accept="image/*">
                                <p class="mt-4 text-sm text-gray-400" id="file-info-text">
                                    {{ $header->image_path ? basename($header->image_path) : 'Pilih gambar untuk pratinjau' }}
                                </p>
                            </div>

                            {{-- KOLOM KANAN: INPUT FORM --}}
                            <div class="flex-1 space-y-6">
                                <div>
                                    <label for="header-title" class="block font-medium text-sm text-gray-300 mb-1">Header Title</label>
                                    <input type="text" id="header-title" name="title"
                                           class="w-full bg-slate-900 border-slate-700 text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                           placeholder="Masukkan Header Title" value="{{ old('title', $header->title) }}">
                                </div>
                                
                                <div>
                                    <label for="body-header" class="block font-medium text-sm text-gray-300 mb-1">Body Header</label>
                                    <textarea id="body-header" name="body" rows="6"
                                              class="w-full bg-slate-900 border-slate-700 text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                              placeholder="Masukkan Body Header">{{ old('body', $header->body) }}</textarea>
                                </div>
                            </div>
                        </div>

                        {{-- TOMBOL AKSI FORM --}}
                        <div class="flex justify-end gap-4 mt-8 pt-6 border-t border-slate-700">
                            <button type="reset" class="px-5 py-2 bg-slate-700 text-gray-300 text-sm font-semibold rounded-md hover:bg-slate-600 transition">
                                Reset
                            </button>
                            <button type="submit" id="save-button" class="px-5 py-2 bg-gray-200 text-gray-800 text-sm font-semibold rounded-md hover:bg-white transition">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Elemen HTML untuk loading overlay --}}
    <div id="loading-overlay" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center flex-col text-white">
        <div class="w-16 h-16 border-4 border-t-transparent border-white rounded-full animate-spin mb-4"></div>
        <p>Sedang mengunggah...</p>
    </div>

</x-app-layout>

{{-- Script tidak ada perubahan --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fileInput = document.getElementById('image-upload');
        const imagePreview = document.getElementById('image-preview');
        const fileInfoText = document.getElementById('file-info-text');

        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                    fileInfoText.textContent = file.name;
                }
                reader.readAsDataURL(file);
            }
        });

        const headerForm = document.getElementById('header-form');
        const saveButton = document.getElementById('save-button');
        const loadingOverlay = document.getElementById('loading-overlay');

        headerForm.addEventListener('submit', function() {
            loadingOverlay.style.display = 'flex';
            saveButton.disabled = true;
            saveButton.textContent = 'Menyimpan...';
        });
    });
</script>