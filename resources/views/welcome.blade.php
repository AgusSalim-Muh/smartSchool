<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Selamat Datang di SmartSchool</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-slate-900">
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            <div class="w-full max-w-5xl mx-auto px-6 lg:px-8">
                <header class="flex items-center justify-between py-8">
                    {{-- Logo SmartSchool --}}
                    <div>
                        <a href="/" class="text-2xl font-bold text-gray-800 dark:text-white">
                            SmartSchool
                        </a>
                    </div>

                    {{-- Tombol Login & Register --}}
                    @if (Route::has('login'))
                        <nav class="flex items-center gap-4 text-sm">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-4 py-2 text-gray-700 dark:text-gray-200 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:hover:text-white/80"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="rounded-md px-4 py-2 text-gray-700 dark:text-gray-200 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:hover:text-white/80"
                                >
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-4 py-2 text-gray-700 dark:text-gray-200 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:hover:text-white/80"
                                    >
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main class="mt-12 lg:mt-20">
                    <div class="grid gap-8 lg:grid-cols-2 lg:gap-16 items-center">
                        {{-- Kolom Teks Konten --}}
                        <div class="text-center lg:text-left">
                            <h1 class="text-4xl lg:text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Gerbang Menuju Pendidikan Cerdas.
                            </h1>
                            <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                                Platform digital terintegrasi untuk siswa, guru, dan orang tua. Akses informasi akademik, jadwal pelajaran, dan pengumuman penting dengan mudah.
                            </p>
                            <div class="mt-8 flex gap-4 justify-center lg:justify-start">
                                <a href="{{ route('login') }}" class="inline-block rounded-lg bg-indigo-600 px-5 py-3 text-base font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500">
                                    Masuk ke Portal
                                </a>
                                <a href="#" class="inline-block rounded-lg px-5 py-3 text-base font-medium text-gray-700 dark:text-gray-300 ring-1 ring-gray-300 dark:ring-gray-700 hover:bg-gray-50 dark:hover:bg-slate-800 transition">
                                    Lihat Program
                                </a>
                            </div>
                        </div>

                        {{-- Kolom Gambar/Ilustrasi --}}
                        <div class="flex items-center justify-center p-8 bg-slate-800 rounded-2xl shadow-lg">
                                                         <svg class="w-48 h-48 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM17.25 15a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                            </svg>
                        </div>
                    </div>
                </main>

                <footer class="py-12 mt-12 text-center text-sm text-gray-500 dark:text-gray-400">
                    <p>
                        &copy; {{ date('Y') }} SmartSchool. All rights reserved.
                    </p>
                </footer>
            </div>
        </div>
    </body>
</html>