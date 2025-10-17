{{-- resources/views/program/edit.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Program') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-8 bg-slate-800 shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-100">
                    Edit Item: <span class="font-bold">{{ $program->title }}</span>
                </h3>
                
                {{-- (PERUBAHAN) Menambahkan ID pada form --}}
                <form action="{{ route('program.update', $program->id) }}" method="POST" enctype="multipart/form-data" id="edit-program-form" class="mt-6 space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="title" class="block font-medium text-sm text-gray-300">Title</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full bg-slate-900 border-slate-700 text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ old('title', $program->title) }}" required>
                    </div>
                    <div>
                        <label for="description" class="block font-medium text-sm text-gray-300">Deskripsi</label>
                        <textarea name="description" id="description" rows="4" class="mt-1 block w-full bg-slate-900 border-slate-700 text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('description', $program->description) }}</textarea>
                    </div>
                    <div>
                        <label for="image" class="block font-medium text-sm text-gray-300">Upload Gambar Baru (Opsional)</label>
                        <img src="{{ asset('storage/' . $program->image_path) }}" alt="Gambar saat ini" class="mt-2 max-w-xs rounded-lg border border-slate-700">
                        <input type="file" name="image" id="image" class="mt-2 block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-slate-700 file:text-gray-300 hover:file:bg-slate-600">
                        <p class="mt-1 text-sm text-gray-400">Biarkan kosong jika tidak ingin mengubah gambar.</p>
                    </div>

                    <div class="flex items-center justify-end gap-4 pt-6 border-t border-slate-700">
                        <a href="{{ route('program.index') }}" class="px-5 py-2 bg-slate-700 text-gray-300 text-sm font-semibold rounded-md hover:bg-slate-600 transition">
                            Batal
                        </a>
                        {{-- (PERUBAHAN) Menambahkan ID pada tombol --}}
                        <button type="submit" id="update-button" class="px-5 py-2 bg-gray-200 text-gray-800 text-sm font-semibold rounded-md hover:bg-white transition">
                            Perbarui Program
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- (TAMBAHAN) Elemen HTML untuk loading overlay --}}
    <div id="loading-overlay" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center flex-col text-white">
        <div class="w-16 h-16 border-4 border-t-transparent border-white rounded-full animate-spin mb-4"></div>
        <p>Sedang memperbarui...</p>
    </div>
</x-app-layout>

{{-- (TAMBAHAN) JavaScript untuk memicu loading --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editProgramForm = document.getElementById('edit-program-form');
        const updateButton = document.getElementById('update-button');
        const loadingOverlay = document.getElementById('loading-overlay');

        if (editProgramForm) {
            editProgramForm.addEventListener('submit', function() {
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