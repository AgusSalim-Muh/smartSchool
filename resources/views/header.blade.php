@extends('layouts.admin')

@section('title', 'Header Smart School')

@section('content')

<main class="header-container">
        <div class="header-wrapper">
            <div class="header-upload-box">
            <div class="header-upload-icon">
                <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M41.3335 25.6667C36.3837 25.6667 33.9089 25.6667 32.3712 24.129C30.8335 22.5913 30.8335 20.1164 30.8335 15.1667C30.8335 10.2169 30.8335 7.74204 32.3712 6.20435C33.9089 4.66666 36.3837 4.66666 41.3335 4.66666C46.2832 4.66666 48.7581 4.66666 50.2958 6.20435C51.8335 7.74204 51.8335 10.2169 51.8335 15.1667C51.8335 20.1164 51.8335 22.5913 50.2958 24.129C48.7581 25.6667 46.2832 25.6667 41.3335 25.6667ZM43.0835 10.5C43.0835 9.53349 42.3 8.74999 41.3335 8.74999C40.367 8.74999 39.5835 9.53349 39.5835 10.5V13.4167H36.6668C35.7003 13.4167 34.9168 14.2002 34.9168 15.1667C34.9168 16.1332 35.7003 16.9167 36.6668 16.9167H39.5835V19.8333C39.5835 20.7998 40.367 21.5833 41.3335 21.5833C42.3 21.5833 43.0835 20.7998 43.0835 19.8333V16.9167H46.0002C46.9667 16.9167 47.7502 16.1332 47.7502 15.1667C47.7502 14.2002 46.9667 13.4167 46.0002 13.4167H43.0835V10.5Z" fill="#A3A3A3"/>
                    <path opacity="0.5" d="M51.8326 29.6283C51.8291 33.0573 51.803 35.9718 51.6082 38.3633C51.3821 41.1384 50.9187 43.4573 49.8816 45.3833C49.4242 46.2328 48.8621 46.9935 48.1777 47.6778C46.2355 49.6201 43.761 50.4999 40.6251 50.9215C37.5614 51.3334 33.6348 51.3334 28.6244 51.3333H28.3753C23.3648 51.3334 19.4382 51.3334 16.3745 50.9215C13.2387 50.4999 10.7642 49.6201 8.82199 47.6778C7.10015 45.956 6.21097 43.8129 5.73812 41.1544C5.27362 38.5429 5.18865 35.2937 5.171 31.259C5.1665 30.2328 5.1665 29.1473 5.1665 28.0022V27.8754C5.16648 22.865 5.16646 18.9384 5.57836 15.8747C5.99996 12.7388 6.87977 10.2644 8.82199 8.32215C10.7642 6.37992 13.2387 5.50012 16.3745 5.07851C19.0991 4.7122 22.6046 4.67167 26.8712 4.66721C27.7703 4.66627 28.4998 5.39549 28.4998 6.29456C28.4998 7.19363 27.77 7.92212 26.8709 7.92307C22.544 7.92764 19.324 7.96707 16.8084 8.30529C14.0335 8.67836 12.3607 9.38789 11.1242 10.6244C9.88774 11.8608 9.1782 13.5337 8.80514 16.3085C8.42578 19.1302 8.42232 22.838 8.42232 28C8.42232 28.6304 8.42232 29.24 8.42306 29.8303L10.5961 27.9289C12.574 26.1983 15.5551 26.2975 17.4135 28.156L26.7246 37.467C28.2162 38.9587 30.5643 39.162 32.2902 37.9491L32.9375 37.4942C35.4211 35.7487 38.7813 35.951 41.0377 37.9817L47.1814 43.5111C47.7998 42.2124 48.167 40.506 48.3631 38.0989C48.5479 35.8309 48.5733 33.0761 48.5768 29.6284C48.5777 28.7293 49.3062 28 50.2053 28C51.1043 28 51.8335 28.7292 51.8326 29.6283Z" fill="#A3A3A3"/>
                </svg>
            </div>
            <p class="header-upload-text">Seret gambar atau</p>
            <button class="header-upload-btn">unggah file</button>
        </div>
        <div class="header-form-box">
            <label for="header-header-title">Header Title</label>
            <input type="text" id="header-title" class="header-form-input" placeholder="Masukkan Header Title">
            <label for="header-body-header">Body Header</label>
            <textarea id="body-header" class="header-form-textarea" placeholder="Masukkan Body Header"></textarea>
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
    </main>
    
    <div id="modal-overlay"></div>
    <div class="modal" id="logout-modal">
        <div class="modal-content">
            <h3>Keluar?</h3>
            <p>Kamu yakin ingin keluar?</p>
                <svg width="147" height="147" viewBox="0 0 147 147" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.1" d="M73.5 0.499939C113.594 0.499939 146.5 33.0034 146.5 73.0898C146.5 113.176 113.594 145.679 73.5 145.679C33.4065 145.679 0.500238 113.176 0.5 73.0898C0.5 33.0034 33.4063 0.499951 73.5 0.499939Z" fill="url(#paint0_radial_12011_692)" stroke="#71A6FE"/>
                    <g opacity="0.4" filter="url(#filter0_d_12011_692)">
                        <path d="M14.7822 72.7179C14.7822 40.2889 41.0711 14 73.5001 14C105.929 14 132.218 40.2889 132.218 72.7179C132.218 105.147 105.929 131.436 73.5001 131.436C41.0711 131.436 14.7822 105.147 14.7822 72.7179Z" fill="url(#paint1_radial_12011_692)"/>
                        <path d="M73.5 14.5C105.653 14.5 131.718 40.565 131.718 72.7178C131.718 104.871 105.653 130.936 73.5 130.936C41.3472 130.935 15.2822 104.871 15.2822 72.7178C15.2823 40.565 41.3472 14.5001 73.5 14.5Z" stroke="#71A6FE"/>
                    </g>
                    <g filter="url(#filter1_d_12011_692)">
                        <path d="M63.3743 21.1473C69.8022 17.3863 77.7216 17.3863 84.1495 21.1473L110.603 36.6257C117.031 40.3867 120.991 47.3374 120.991 54.8595L120.991 85.8162C120.991 93.3383 117.031 100.289 110.603 104.05L84.1495 119.528C77.7216 123.289 69.8022 123.289 63.3743 119.528L36.9208 104.05C30.4929 100.289 26.5332 93.3383 26.5332 85.8162L26.5332 54.8595C26.5332 47.3374 30.4929 40.3867 36.9208 36.6257L63.3743 21.1473Z" fill="url(#paint2_linear_12011_692)"/>
                        <path d="M65.2156 30.194C70.5044 27.1246 77.0204 27.1246 82.3091 30.194L104.075 42.8257C109.363 45.8951 112.621 51.5675 112.621 57.7063L112.621 82.9697C112.621 89.1085 109.363 94.7809 104.075 97.8503L82.3091 110.482C77.0204 113.551 70.5044 113.551 65.2156 110.482L43.4501 97.8503C38.1613 94.7809 34.9033 89.1085 34.9033 82.9697L34.9033 57.7063C34.9033 51.5675 38.1613 45.8951 43.4501 42.8257L65.2156 30.194Z" fill="#06539A"/>
                        <path d="M68.1325 33.619C73.0958 30.7658 79.2108 30.7658 84.1741 33.619L104.6 45.3612C109.563 48.2144 112.621 53.4874 112.621 59.1938L112.621 82.6782C112.621 88.3846 109.563 93.6576 104.6 96.5108L84.1741 108.253C79.2108 111.106 73.0958 111.106 68.1325 108.253L47.7064 96.5108C42.7431 93.6576 39.6855 88.3846 39.6855 82.6782L39.6855 59.1938C39.6855 53.4874 42.7431 48.2144 47.7064 45.3612L68.1325 33.619Z" fill="url(#paint3_linear_12011_692)"/>
                        <g filter="url(#filter2_d_12011_692)">
                            <path d="M67.9512 44.7079C71.3331 42.7638 75.4999 42.7639 78.8818 44.7079L93.1182 52.8915C96.5001 54.8356 98.583 58.429 98.583 62.3163L98.583 78.6835C98.583 82.5708 96.5001 86.1641 93.1182 88.1083L78.8818 96.2919C75.4999 98.2358 71.3331 98.2359 67.9512 96.2919L53.7148 88.1083C50.3329 86.1641 48.25 82.5708 48.25 78.6835L48.25 62.3163C48.25 58.429 50.3329 54.8356 53.7148 52.8915L67.9512 44.7079Z" fill="#F16F27" stroke="#FA926F" stroke-width="0.5"/>
                            <g filter="url(#filter3_d_12011_692)">
                                <path d="M70.483 76.8994L70.483 74.1994C70.483 73.266 70.583 72.3994 70.783 71.5994C71.0163 70.766 71.3663 69.966 71.833 69.1994C72.333 68.3994 72.983 67.5994 73.783 66.7994C74.3163 66.2327 74.733 65.7327 75.033 65.2994C75.3663 64.866 75.5997 64.466 75.733 64.0994C75.8663 63.6994 75.933 63.2994 75.933 62.8994C75.933 62.3994 75.7997 61.9827 75.533 61.6494C75.2997 61.2827 74.933 61.016 74.433 60.8494C73.9663 60.6494 73.3663 60.5494 72.633 60.5494C71.1663 60.5494 69.733 60.7994 68.333 61.2994C66.933 61.7994 65.5497 62.566 64.183 63.5994L61.333 56.8994C62.3663 56.066 63.533 55.366 64.833 54.7994C66.1663 54.2327 67.5497 53.7994 68.983 53.4994C70.4497 53.166 71.8997 52.9994 73.333 52.9994C75.633 52.9994 77.6497 53.366 79.383 54.0994C81.1497 54.8327 82.5163 55.866 83.483 57.1994C84.4497 58.4994 84.933 60.0327 84.933 61.7994C84.933 62.7994 84.783 63.7494 84.483 64.6494C84.183 65.5494 83.6997 66.4327 83.033 67.2994C82.3663 68.1327 81.433 68.9827 80.233 69.8494C79.1997 70.616 78.383 71.316 77.783 71.9494C77.2163 72.5827 76.7997 73.166 76.533 73.6994C76.2997 74.2327 76.133 74.7494 76.033 75.2494L75.733 76.8994H70.483ZM68.483 88.7994L68.483 79.6994H77.733L77.733 88.7994H68.483Z" fill="white"/>
                            </g>
                        </g>
                    </g>
                    <defs>
                        <filter id="filter0_d_12011_692" x="10.7822" y="14" width="125.436" height="125.436" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0.0235294 0 0 0 0 0.32549 0 0 0 0 0.603922 0 0 0 0.5 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12011_692"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12011_692" result="shape"/>
                        </filter>
                        <filter id="filter1_d_12011_692" x="22.5332" y="18.3265" width="102.457" height="112.023" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0.0235294 0 0 0 0 0.32549 0 0 0 0 0.603922 0 0 0 0.5 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12011_692"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12011_692" result="shape"/>
                        </filter>
                        <filter id="filter2_d_12011_692" x="44" y="42.9999" width="58.833" height="63" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12011_692"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12011_692" result="shape"/>
                        </filter>
                        <filter id="filter3_d_12011_692" x="34.333" y="21.9994" width="77.5996" height="89.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="-4"/>
                            <feGaussianBlur stdDeviation="13.5"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12011_692"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12011_692" result="shape"/>
                        </filter>
                        <radialGradient id="paint0_radial_12011_692" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(73.5 72.9491) rotate(90) scale(121.216 121.897)">
                            <stop offset="0.490385" stop-color="#0D7ADE"/>
                            <stop offset="1" stop-color="#BED2FE"/>
                        </radialGradient>
                        <radialGradient id="paint1_radial_12011_692" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(73.5001 72.6052) rotate(90) scale(97.3817 97.3817)">
                            <stop offset="0.490385" stop-color="#0D7ADE"/>
                            <stop offset="1" stop-color="#BED2FE"/>
                        </radialGradient>
                        <linearGradient id="paint2_linear_12011_692" x1="73.7619" y1="18.3265" x2="73.7619" y2="122.349" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#BED2FE"/>
                        </linearGradient>
                        <linearGradient id="paint3_linear_12011_692" x1="41.6804" y1="51.451" x2="92.8118" y2="93.0889" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#022C57"/>
                            <stop offset="1" stop-color="#0D7ADE"/>
                        </linearGradient>
                    </defs>
                </svg>

            <div class="modal-buttons">
                <button class="btn btn-cancel" id="cancel-button">Tidak</button>
                <button class="btn btn-confirm" id="confirm-button">Yakin</button>
            </div>
        </div>
    </div>

    <!-- <script src="script-admin.js"></script> -->

@endsection