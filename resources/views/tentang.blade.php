@extends('layouts.admin')

@section('title', 'Tentang Smart School')

@section('content')

    <div class="tentang-container">
        <div class="tentang-wrapper">
            <label for="uploadGambar">Upload Gambar</label>
            <input type="file" id="uploadGambar" class="tentang-wrapper-input" placeholder="Unggah File">
            <label for="title">Title</label>
            <input type="text" id="title" class="tentang-wrapper-input" placeholder="Masukkan Title">
            <label for="diskripsi">Diskripsi</label>
            <textarea id="diskripsi" class="tentang-wrapper-textarea" placeholder="Masukkan Diskripsi"></textarea>
        </div>
        <div class="tentang-wrapper">
            <label for="uploadGambar">Upload Gambar</label>
            <input type="file" id="uploadGambar" class="tentang-wrapper-input" placeholder="Unggah File">
            <label for="title">Title</label>
            <input type="text" id="title" class="tentang-wrapper-input" placeholder="Masukkan Title">
            <label for="diskripsi">Diskripsi</label>
            <textarea id="diskripsi" class="tentang-wrapper-textarea" placeholder="Masukkan Diskripsi"></textarea>
        </div>
        <div class="tentang-wrapper">
            <label for="uploadGambar">Upload Gambar</label>
            <input type="file" id="uploadGambar" class="tentang-wrapper-input" placeholder="Unggah File">
            <label for="title">Title</label>
            <input type="text" id="title" class="tentang-wrapper-input" placeholder="Masukkan Title">
            <label for="diskripsi">Diskripsi</label>
            <textarea id="diskripsi" class="tentang-wrapper-textarea" placeholder="Masukkan Diskripsi"></textarea>
        </div>
    </div>

    <div class="form-actions">
        <button class="btn btn-reset">Reset 
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.5" cx="9.99984" cy="10" r="8.33333" fill="#F16F27"/>
                <path d="M13.6682 5.23848C13.6682 4.98436 13.5144 4.75554 13.279 4.65967C13.0437 4.5638 12.7737 4.61997 12.5961 4.80175L11.9707 5.442C10.2035 4.6289 8.05476 4.9659 6.6068 6.44819C4.7424 8.35679 4.7424 11.4453 6.6068 13.3539C8.47919 15.2707 11.5211 15.2707 13.3935 13.3539C14.4796 12.2421 14.9308 10.7316 14.7548 9.29227C14.7128 8.94965 14.4011 8.70587 14.0585 8.74777C13.7159 8.78968 13.4721 9.1014 13.514 9.44402C13.6466 10.5279 13.3058 11.6549 12.4994 12.4804C11.1174 13.8952 8.88295 13.8952 7.50097 12.4804C6.111 11.0575 6.111 8.74458 7.50097 7.32166C8.45578 6.34421 9.81641 6.04288 11.021 6.41423L10.3864 7.06385C10.2107 7.24373 10.1599 7.51139 10.2575 7.74314C10.3551 7.97489 10.5821 8.12558 10.8335 8.12558H13.0432C13.3884 8.12558 13.6682 7.84576 13.6682 7.50058V5.23848Z" fill="#F16F27"/>
            </svg>
        </button>
        <button class="btn btn-save">Simpan 
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5" d="M18.3337 10C18.3337 14.6024 14.6027 18.3334 10.0003 18.3334C5.39795 18.3334 1.66699 14.6024 1.66699 10C1.66699 5.39765 5.39795 1.66669 10.0003 1.66669C14.6027 1.66669 18.3337 5.39765 18.3337 10Z" fill="white"/>
                <path d="M13.3583 7.47475C13.6024 7.71882 13.6024 8.11455 13.3583 8.35863L9.19162 12.5253C8.94754 12.7694 8.55181 12.7694 8.30773 12.5253L6.64107 10.8586C6.39699 10.6146 6.39699 10.2188 6.64107 9.97475C6.88514 9.73067 7.28087 9.73067 7.52495 9.97475L8.74967 11.1995L10.612 9.33711L12.4744 7.47475C12.7185 7.23067 13.1142 7.23067 13.3583 7.47475Z" fill="white"/>
            </svg>
        </button>
    </div>

@endsection