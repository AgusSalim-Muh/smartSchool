<x-app-layout>
    {{-- Slot untuk judul halaman --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Item Tentang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-8 bg-slate-800 shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-100">
                    Edit Item: <span class="font-bold">{{ $about->title }}</span>
                </h3>

                {{-- Menampilkan pesan error validasi --}}
                @if ($errors->any())
                    <div class="mt-4 bg-red-500/10 border border-red-500/20 text-red-300 px-4 py-3 rounded-lg">
                        <strong class="font-bold">Oops! Ada yang salah:</strong>
                        <ul class="mt-2 list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('tentang.update', $about->id) }}" method="POST" enctype="multipart/form-data" id="edit-item-form" class="mt-6 space-y-6">
                    @csrf
                    @method('PUT')

                    {{-- Field Title --}}
                    <div>
                        <label for="title" class="block font-medium text-sm text-gray-300">Title</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full bg-slate-900 border-slate-700 text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ old('title', $about->title) }}" required>
                    </div>

                    {{-- Field Deskripsi --}}
                    <div>
                        <label for="description" class="block font-medium text-sm text-gray-300">Deskripsi</label>
                        <textarea name="description" id="description" rows="4" class="mt-1 block w-full bg-slate-900 border-slate-700 text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('description', $about->description) }}</textarea>
                    </div>
                    
                    {{-- Field Upload Gambar --}}
                    <div>
                        <label for="image" class="block font-medium text-sm text-gray-300">Upload Gambar Baru (Opsional)</label>
                        
                        @if($about->image_path)
                            <img src="{{ asset('storage/' . $about->image_path) }}" alt="Gambar saat ini" class="mt-2 max-w-xs rounded-lg border border-slate-700">
                        @endif

                        <input type="file" name="image" id="image" class="mt-2 block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-slate-700 file:text-gray-300 hover:file:bg-slate-600">
                        <p class="mt-1 text-sm text-gray-400">Biarkan kosong jika tidak ingin mengubah gambar.</p>
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="flex items-center justify-end gap-4 pt-6 border-t border-slate-700">
                        <a href="{{ route('tentang.index') }}" class="px-5 py-2 bg-slate-700 text-gray-300 text-sm font-semibold rounded-md hover:bg-slate-600 transition">
                            Batal
                        </a>
                        <button type="submit" id="update-button" class="px-5 py-2 bg-gray-200 text-gray-800 text-sm font-semibold rounded-md hover:bg-white transition">
                            Perbarui Item
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Elemen HTML untuk loading overlay --}}
    <div id="loading-overlay" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center flex-col text-white">
        <div class="w-16 h-16 border-4 border-t-transparent border-white rounded-full animate-spin mb-4"></div>
        <p>Sedang memperbarui...</p>
    </div>

</x-app-layout>

{{-- JavaScript untuk memicu loading (tidak ada perubahan) --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editItemForm = document.getElementById('edit-item-form');
        const updateButton = document.getElementById('update-button');
        const loadingOverlay = document.getElementById('loading-overlay');

        if (editItemForm) {
            editItemForm.addEventListener('submit', function() {
                if (loadingOverlay) {
                    loadingOverlay.style.display = 'flex';
                }
                if (updateButton) {
                    updateButton.disabled = true;
                    updateButton.innerText = 'Memperbarui...';
                }
            });
        }
    });
</script>