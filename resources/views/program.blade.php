@extends('layouts.admin')

@section('title', 'Program Smart School')

@section('content')

    <div class="program-container">
        <div class="program-upload-box">
            <div class="program-upload-icon">
                <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    {{-- Konten SVG tetap sama --}}
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M41.3335 25.6667C36.3837 25.6667 33.9089 25.6667 32.3712 24.129C30.8335 22.5913 30.8335 20.1164 30.8335 15.1667C30.8335 10.2169 30.8335 7.74204 32.3712 6.20435C33.9089 4.66666 36.3837 4.66666 41.3335 4.66666C46.2832 4.66666 48.7581 4.66666 50.2958 6.20435C51.8335 7.74204 51.8335 10.2169 51.8335 15.1667C51.8335 20.1164 51.8335 22.5913 50.2958 24.129C48.7581 25.6667 46.2832 25.6667 41.3335 25.6667ZM43.0835 10.5C43.0835 9.53349 42.3 8.74999 41.3335 8.74999C40.367 8.74999 39.5835 9.53349 39.5835 10.5V13.4167H36.6668C35.7003 13.4167 34.9168 14.2002 34.9168 15.1667C34.9168 16.1332 35.7003 16.9167 36.6668 16.9167H39.5835V19.8333C39.5835 20.7998 40.367 21.5833 41.3335 21.5833C42.3 21.5833 43.0835 20.7998 43.0835 19.8333V16.9167H46.0002C46.9667 16.9167 47.7502 16.1332 47.7502 15.1667C47.7502 14.2002 46.9667 13.4167 46.0002 13.4167H43.0835V10.5Z" fill="#A3A3A3"/>
                    <path opacity="0.5" d="M51.8326 29.6283C51.8291 33.0573 51.803 35.9718 51.6082 38.3633C51.3821 41.1384 50.9187 43.4573 49.8816 45.3833C49.4242 46.2328 48.8621 46.9935 48.1777 47.6778C46.2355 49.6201 43.761 50.4999 40.6251 50.9215C37.5614 51.3334 33.6348 51.3334 28.6244 51.3333H28.3753C23.3648 51.3334 19.4382 51.3334 16.3745 50.9215C13.2387 50.4999 10.7642 49.6201 8.82199 47.6778C7.10015 45.956 6.21097 43.8129 5.73812 41.1544C5.27362 38.5429 5.18865 35.2937 5.171 31.259C5.1665 30.2328 5.1665 29.1473 5.1665 28.0022V27.8754C5.16648 22.865 5.16646 18.9384 5.57836 15.8747C5.99996 12.7388 6.87977 10.2644 8.82199 8.32215C10.7642 6.37992 13.2387 5.50012 16.3745 5.07851C19.0991 4.7122 22.6046 4.67167 26.8712 4.66721C27.7703 4.66627 28.4998 5.39549 28.4998 6.29456C28.4998 7.19363 27.77 7.92212 26.8709 7.92307C22.544 7.92764 19.324 7.96707 16.8084 8.30529C14.0335 8.67836 12.3607 9.38789 11.1242 10.6244C9.88774 11.8608 9.1782 13.5337 8.80514 16.3085C8.42578 19.1302 8.42232 22.838 8.42232 28C8.42232 28.6304 8.42232 29.24 8.42306 29.8303L10.5961 27.9289C12.574 26.1983 15.5551 26.2975 17.4135 28.156L26.7246 37.467C28.2162 38.9587 30.5643 39.162 32.2902 37.9491L32.9375 37.4942C35.4211 35.7487 38.7813 35.951 41.0377 37.9817L47.1814 43.5111C47.7998 42.2124 48.167 40.506 48.3631 38.0989C48.5479 35.8309 48.5733 33.0761 48.5768 29.6284C48.5777 28.7293 49.3062 28 50.2053 28C51.1043 28 51.8335 28.7292 51.8326 29.6283Z" fill="#A3A3A3"/>
                </svg>
            </div>
            <p class="program-upload-text">Seret gambar atau</p>
            <button class="program-upload-btn">unggah file</button>
        </div>
        <div class="program-upload-title">
            <label for="program-header-title">Title</label>
            <input type="text" id="header-title" class="program-form-input" placeholder="Masukkan Header Title">
        </div>
    </div>
    <div class="program-wrapper">
        <div class="program-wrapper-item">
            <label for="uploadGambar">Upload Gambar</label>
            <input type="file" id="uploadGambar" class="program-wrapper-input" placeholder="Unggah File">
            <label for="diskripsi">Diskripsi</label>
            <textarea id="diskripsi" class="program-wrapper-textarea" placeholder="Masukkan Diskripsi"></textarea>
        </div>
        <div class="program-wrapper-item">
            <label for="uploadGambar">Upload Gambar</label>
            <input type="file" id="uploadGambar" class="program-wrapper-input" placeholder="Unggah File">
            <label for="diskripsi">Diskripsi</label>
            <textarea id="diskripsi" class="program-wrapper-textarea" placeholder="Masukkan Diskripsi"></textarea>
        </div>
        <div class="program-wrapper-item">
            <label for="uploadGambar">Upload Gambar</label>
            <input type="file" id="uploadGambar" class="program-wrapper-input" placeholder="Unggah File">
            <label for="diskripsi">Diskripsi</label>
            <textarea id="diskripsi" class="program-wrapper-textarea" placeholder="Masukkan Diskripsi"></textarea>
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