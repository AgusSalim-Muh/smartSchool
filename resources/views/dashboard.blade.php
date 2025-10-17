<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Pesan Selamat Datang --}}
            <div class="p-8 bg-slate-800 shadow sm:rounded-lg mb-8">
                <h2 class="text-2xl font-bold text-gray-100">Selamat Datang Kembali, {{ Auth::user()->name }}!</h2>
                <p class="mt-2 text-gray-400">Berikut adalah ringkasan konten dari website Anda.</p>
            </div>

            {{-- Grid untuk Kartu Ringkasan --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="p-6 bg-slate-800 shadow sm:rounded-lg flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-4">
                            {{-- Ikon --}}
                            <div class="w-12 h-12 flex items-center justify-center bg-indigo-500/10 rounded-lg">
                                <svg class="w-6 h-6 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-1.007 1.11-1.226m-2.472 4.155L7.38 7.38m5.24 5.24-1.513-1.513M3.94 10.343c-.542-.09-1.007-.56-1.226-1.11m4.155 2.472L7.38 12.25m5.24-5.24-1.513 1.513M12 3.862c-1.018 0-1.844.825-1.844 1.843v.063m14.138 2.375c.303-.544.455-1.158.455-1.787a8.25 8.25 0 00-16.5 0c0 .63.152 1.243.455 1.787m15.59 6.336c.09.542.56 1.007 1.11 1.226m-2.472-4.155-1.513 1.513m-5.24 5.24 1.513 1.513M12 20.138c-1.018 0-1.844-.825-1.844-1.843v-.063m14.138-2.375c.303.544.455 1.158.455 1.787a8.25 8.25 0 01-16.5 0c0-.63.152 1.243.455-1.787M3.94 13.657c-.542.09-1.007.56-1.226 1.11m4.155-2.472-1.513 1.513m5.24-5.24 1.513-1.513" /></svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-100">Header</h3>
                        </div>
                        <p class="mt-4 text-sm text-gray-400">
                            @if($header && $header->title)
                                Judul header saat ini adalah "{{ Str::limit($header->title, 25) }}".
                            @else
                                Anda belum mengatur konten untuk header utama.
                            @endif
                        </p>
                    </div>
                    <a href="{{ route('admin.header.index') }}" class="mt-6 block text-sm font-medium text-indigo-400 hover:text-indigo-300 transition">
                        Kelola Header &rarr;
                    </a>
                </div>

                <div class="p-6 bg-slate-800 shadow sm:rounded-lg flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-4">
                             <div class="w-12 h-12 flex items-center justify-center bg-sky-500/10 rounded-lg">
                                <svg class="w-6 h-6 text-sky-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.852l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" /></svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-100">Tentang</h3>
                        </div>
                        <p class="mt-4 text-4xl font-extrabold text-gray-100">{{ $tentangCount }} <span class="text-base font-medium text-gray-400">Item</span></p>
                        <p class="mt-2 text-sm text-gray-400">Jumlah item yang ditampilkan di halaman 'Tentang'.</p>
                    </div>
                     <a href="{{ route('tentang.index') }}" class="mt-6 block text-sm font-medium text-sky-400 hover:text-sky-300 transition">
                        Kelola Tentang &rarr;
                    </a>
                </div>

                <div class="p-6 bg-slate-800 shadow sm:rounded-lg flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-emerald-500/10 rounded-lg">
                                <svg class="w-6 h-6 text-emerald-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-100">Program</h3>
                        </div>
                        <p class="mt-4 text-4xl font-extrabold text-gray-100">{{ $programCount }} <span class="text-base font-medium text-gray-400">Program</span></p>
                        <p class="mt-2 text-sm text-gray-400">Jumlah program unggulan yang telah ditambahkan.</p>
                    </div>
                     <a href="{{ route('program.index') }}" class="mt-6 block text-sm font-medium text-emerald-400 hover:text-emerald-300 transition">
                        Kelola Program &rarr;
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>