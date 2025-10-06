<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- Memperbaiki path ke file CSS menggunakan 'asset()' --}}
    <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Single:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <title>Login Smart School</title>
</head>
<body>
    <div class="container">
        <div class="left">
            {{-- Memperbaiki path ke gambar menggunakan 'asset()' --}}
            <img src="{{ asset('assets/background.png') }}" alt="kelas">
        </div>
        <div class="right">
            <h1>Smart School</h1>
            
            {{-- Menambahkan tag <form> dan token @csrf yang wajib untuk keamanan --}}
            <form method="POST" action="{{ route('login') }}" class="form-wrapper">
                @csrf

                <div class="form-item">
                    <label for="email">Email</label>
                    <div class="form-icon">
                        <span>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M11.8335 2.9577H8.16683C4.70986 2.9577 2.98138 2.9577 1.90744 4.05605C0.833496 5.1544 0.833496 6.92217 0.833496 10.4577C0.833496 13.9932 0.833496 15.761 1.90744 16.8594C2.98138 17.9577 4.70986 17.9577 8.16683 17.9577H11.8335C15.2905 17.9577 17.0189 17.9577 18.0929 16.8594C19.1668 15.761 19.1668 13.9932 19.1668 10.4577C19.1668 6.92217 19.1668 5.1544 18.0929 4.05605C17.0189 2.9577 15.2905 2.9577 11.8335 2.9577Z" fill="#F16F27"/>
                                <path d="M15.9401 7.15271C16.2318 6.90964 16.2712 6.47612 16.0282 6.18443C15.7851 5.89274 15.3516 5.85333 15.0599 6.09641L13.0809 7.74556C12.2257 8.45824 11.6319 8.95144 11.1307 9.27384C10.6454 9.58593 10.3163 9.69069 10 9.69069C9.6837 9.69069 9.35463 9.58593 8.86939 9.27384C8.3681 8.95144 7.77435 8.45824 6.91913 7.74556L4.94014 6.09641C4.64845 5.85333 4.21494 5.89274 3.97187 6.18443C3.72879 6.47612 3.7682 6.90964 4.05989 7.15271L6.07334 8.83059C6.88584 9.50769 7.54437 10.0565 8.1256 10.4303C8.73105 10.8197 9.3207 11.0657 10 11.0657C10.6793 11.0657 11.269 10.8197 11.8744 10.4303C12.4557 10.0565 13.1142 9.50768 13.9267 8.83058L15.9401 7.15271Z" fill="#F16F27"/>
                            </svg>
                        </span>
                    </div>
                    <input type="email" name="email" placeholder="Masukkan Email" required>
                </div>

                <div class="form-item">
                    <label for="password">Password</label>
                    <div class="form-icon">
                        <span>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M1.6665 13.791C1.6665 11.434 1.6665 10.2555 2.39874 9.52328C3.13097 8.79105 4.30948 8.79105 6.6665 8.79105H13.3332C15.6902 8.79105 16.8687 8.79105 17.6009 9.52328C18.3332 10.2555 18.3332 11.434 18.3332 13.791C18.3332 16.1481 18.3332 17.3266 17.6009 18.0588C16.8687 18.791 15.6902 18.791 13.3332 18.791H6.6665C4.30948 18.791 3.13097 18.791 2.39874 18.0588C1.6665 17.3266 1.6665 16.1481 1.6665 13.791Z" fill="#F16F27"/>
                                <path d="M6.66683 14.6244C7.12707 14.6244 7.50016 14.2513 7.50016 13.791C7.50016 13.3308 7.12707 12.9577 6.66683 12.9577C6.20659 12.9577 5.8335 13.3308 5.8335 13.791C5.8335 14.2513 6.20659 14.6244 6.66683 14.6244Z" fill="#F16F27"/>
                                <path d="M10.0002 14.6244C10.4604 14.6244 10.8335 14.2513 10.8335 13.791C10.8335 13.3308 10.4604 12.9577 10.0002 12.9577C9.53993 12.9577 9.16683 13.3308 9.16683 13.791C9.16683 14.2513 9.53993 14.6244 10.0002 14.6244Z" fill="#F16F27"/>
                                <path d="M14.1668 13.791C14.1668 14.2513 13.7937 14.6244 13.3335 14.6244C12.8733 14.6244 12.5002 14.2513 12.5002 13.791C12.5002 13.3308 12.8733 12.9577 13.3335 12.9577C13.7937 12.9577 14.1668 13.3308 14.1668 13.791Z" fill="#F16F27"/>
                                <path d="M5.625 7.12436C5.625 4.70811 7.58375 2.74936 10 2.74936C12.0377 2.74936 13.7515 4.14304 14.2372 6.03015C14.3232 6.36443 14.664 6.56567 14.9983 6.47963C15.3325 6.39359 15.5338 6.05286 15.4478 5.71857C14.8234 3.29261 12.6219 1.49936 10 1.49936C6.8934 1.49936 4.375 4.01776 4.375 7.12436V8.83653C4.73876 8.80937 5.1522 8.79842 5.625 8.794V7.12436Z" fill="#F16F27"/>
                            </svg>
                        </span>
                    </div>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
                
                <div class="checkbox">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Ingat Saya</label>
                </div>
                
                <button type="submit" class="btn">Login</button>

            </form>
        </div>
    </div>
</body>
</html>