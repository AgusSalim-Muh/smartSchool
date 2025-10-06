<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- Perubahan 1: Menggunakan helper 'asset' untuk path CSS --}}
    <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-admin.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Single:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    
    {{-- Judul halaman bisa dibuat dinamis --}}
    <title>@yield('title', 'Admin Smart School')</title>
</head>
<body>

    <header>
        <div class="navbar-profile">
            <h1 class="navbar-logo">Smart School</h1>
            <div class="profile-info">
                <div class="profile-name-email">
                    {{-- Data ini nantinya bisa diisi dari database --}}
                    <p class="profile-name">Travis Barker</p>
                    <p class="profile-email">Admin@email.com</p>
                </div>
                <div class="profile-avatar">TB</div>
            </div>
        </div>
        <nav class="navigation">
            <ul class="navlist">
                {{-- Perubahan 2 & 4: Menggunakan 'url' dan logika untuk class 'active' --}}
                <li class="nav-item"><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Header</a></li>
                <li class="nav-item"><a href="{{ url('/tentang') }}" class="{{ Request::is('tentang') ? 'active' : '' }}">Tentang</a></li>
                <li class="nav-item"><a href="{{ url('/program') }}" class="{{ Request::is('program') ? 'active' : '' }}">Program</a></li>
                <li class="nav-item"><a href="#" id="logout-button">Keluar</a></li>
            </ul>
        </nav>
    </header>

    {{-- Perubahan 3: Konten spesifik halaman akan ditampilkan di sini --}}
    <main>
        @yield('content')
    </main>
    
    {{-- Modal untuk logout (Tidak perlu diubah) --}}
    <div id="modal-overlay"></div>
    <div class="modal" id="logout-modal">
        <div class="modal-content">
            <h3>Keluar?</h3>
            <p>Kamu yakin ingin keluar?</p>
            {{-- SVG dan tombol modal tetap sama --}}
            <div class="modal-buttons">
                <button class="btn btn-cancel" id="cancel-button">Tidak</button>
                <button class="btn btn-confirm" id="confirm-button">Yakin</button>
            </div>
        </div>
    </div>

    {{-- Perubahan 1: Menggunakan helper 'asset' untuk path JS --}}
    <script src="{{ asset('js/script-admin.js') }}"></script>

</body>
</html>