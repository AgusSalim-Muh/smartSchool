<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-admin.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Single:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    
    {{-- (PERBAIKAN) Menambahkan @stack untuk CSS spesifik halaman --}}
    @stack('styles')
    
    <title>@yield('title', 'Admin Smart School')</title>
</head>
<body>

    <header>
        <div class="navbar-profile">
            <h1 class="navbar-logo">Smart School</h1>
            <div class="profile-info">
                <div class="profile-name-email">
                    <p class="profile-name">Travis Barker</p>
                    <p class="profile-email">Admin@email.com</p>
                </div>
                <div class="profile-avatar">TB</div>
            </div>
        </div>
        <nav class="navigation">
            <ul class="navlist">
                {{-- (PERBAIKAN) Logika 'active' yang lebih baik menggunakan wildcard (*) --}}
                <li class="nav-item"><a href="{{ url('/admin/header') }}" class="{{ Request::is('admin/header*') ? 'active' : '' }}">Header</a></li>
                <li class="nav-item"><a href="{{ url('/admin/tentang') }}" class="{{ Request::is('admin/tentang*') ? 'active' : '' }}">Tentang</a></li>
                <li class="nav-item"><a href="{{ url('/program') }}" class="{{ Request::is('program*') ? 'active' : '' }}">Program</a></li>
                <li class="nav-item"><a href="#" id="logout-button">Keluar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
    
    {{-- Modal untuk logout --}}
    <div id="modal-overlay"></div>
    <div class="modal" id="logout-modal">
        {{-- ... Konten modal Anda tidak berubah ... --}}
    </div>

    <script src="{{ asset('js/script-admin.js') }}"></script>

    {{-- (PERBAIKAN UTAMA) Menambahkan 'wadah' untuk script dari halaman lain --}}
    @stack('scripts')

</body>
</html>