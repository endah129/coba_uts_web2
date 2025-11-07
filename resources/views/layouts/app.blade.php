<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Laravel | @yield('title')</title> 
    {{-- Tambahkan Judul Aplikasi di sini --}}

    {{-- Link CSS Anda --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    {{-- IMPLEMENTASI HEADER DAN NAVIGASI (Sesuai Soal No. 1) --}}
    <header>
        <nav class="main-nav">
            <a href="{{ route('home') }}">Home</a> 
            <!-- <a href="{{ route('about') }}">About</a> -->
            {{-- Teks Identitas Mahasiswa di Header (dari gambar Home Anda) --}}
            <span class="student-info">230101022 - ENDAH KOMARIYAH LESTARI</span>
        </nav>
    </header>
    {{-- END HEADER --}}

    {{-- KONTEN UTAMA DARI VIEW ANAK --}}
    <main> 
        @yield('content')
    </main>

    {{-- Opsional: Tambahkan Footer di sini jika diperlukan --}}
    {{-- <footer>
        <p>&copy; 2025 UTS Laravel</p>
    </footer> --}}

</body>
</html>