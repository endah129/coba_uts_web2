<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Data penulis untuk halaman About
    public static function getAuthors()
    {
        return [
            [
                'name' => 'ENDAH KOMARIYAH LESTARI',
                'nim' => '2301010138',
                'image' => 'profile_aranta.jpg',
                'bio' => 'professional back end developer and ocassionally AK47 bringer',
                'class' => '(GENAP)'
            ],
            [
                'name' => 'ARTHUR EMANUEL DEKKO',
                'nim' => '2301010097',
                'image' => 'profile_arthur.jpg',
                'bio' => 'Designing front-end is my passion sir 💅',
                'class' => '(GANJIL)'
            ]
        ];
    }
}