<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Catatan: Karena kita tidak menggunakan database (hanya data statis),
// kita tidak perlu menggunakan banyak fitur bawaan Model Eloquent.

class Destination extends Model
{
    /**
     * Mengambil semua data destinasi secara statis.
     * Nanti, jika pakai DB, method ini akan diganti dengan `Destination::all()`.
     */
    public static function getAll()
    {
        return [
            [
                'title' => 'Acropolis, Yunani',
                'image' => 'acropolis.jpg', // Nama file gambar
                'alt' => 'Gambar Acropolis di Yunani'
            ],
            [
                'title' => 'Shibuya, Jepang',
                'image' => 'shibuya.jpg',
                'alt' => 'Gambar persimpangan Shibuya di Jepang'
            ],
            [
                'title' => 'Cappadocia, Mudi Bale',
                'image' => 'cappadocia.jpg',
                'alt' => 'Gambar balon udara di Cappadocia'
            ],
            [
                'title' => 'Giza, Lotim',
                'image' => 'giza.jpg',
                'alt' => 'Gambar Piramida Giza'
            ],
            [
                'title' => 'Garuda Wisnu Kencana, Bali',
                'image' => 'gwk.jpg',
                'alt' => 'Gambar patung Garuda Wisnu Kencana'
            ],
            [
                'title' => 'Huayara, Peru',
                'image' => 'huayara.jpg',
                'alt' => 'Gambar Machu Picchu atau reruntuhan di Peru'
            ],
            [
                'title' => 'Jumeirah, Abu Dhabi',
                'image' => 'jumeirah.jpg',
                'alt' => 'Gambar Palm Jumeirah di Abu Dhabi'
            ],
            [
                'title' => 'Newyork, US',
                'image' => 'newyork.jpg',
                'alt' => 'Gambar Central Park atau kota New York'
            ],
            [
                'title' => 'Niagara, Kanada',
                'image' => 'niagara.jpg',
                'alt' => 'Gambar Air Terjun Niagara'
            ],
        ];
    }

    /**
     * Implementasi function COUNT untuk menghitung jumlah data.
     * Ini memenuhi sebagian dari Soal No. 4.
     */
    public static function countAll()
    {
        return count(self::getAll());
    }
}