<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Author; // <-- Model About

class AboutController extends Controller
{
    public function about()
    {
        $authors = Author::getAuthors();
        return view('about', compact('authors'));
    }
}