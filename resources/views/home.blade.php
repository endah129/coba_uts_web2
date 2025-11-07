@extends('layouts.app') 

@section('title', 'Beranda')

@section('content')
    <h1 class="main-title">Halaman ini dibuat oleh 230101022 - ENDAH KOMARIYAH LESTARI</h1>

    {{-- Menampilkan Hitungan Data dari Controller/Model (Gabungan M-V-C) --}}
    <p class="text-center">Total Destinasi yang Ditampilkan: <strong>{{ $totalCount }}</strong></p> 

    {{-- Grid Konten Gambar (Menggunakan $destinations) --}}
    <div class="image-grid">  {{-- <--- Tag Pembuka Container Grid --}}
        @foreach($destinations as $destination)
            <div class="grid-item" 
                style="background-image: url('{{ asset('images/' . $destination['image']) }}');">
                {{-- Hapus '/destinations' dari path (Sudah benar sesuai struktur folder Anda) --}}
                <div class="overlay-text">
                    {{ $destination['title'] }}
                </div>
            </div>
        @endforeach
    </div>  {{-- <--- Tag Penutup Container Grid yang HILANG --}}

@endsection