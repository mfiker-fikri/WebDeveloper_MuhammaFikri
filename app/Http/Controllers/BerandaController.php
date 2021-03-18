<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;


class BerandaController extends Controller
{
    //
    public function index()
    {
        $articles = Article::inRandomOrder()->orderBy('id', 'DESC')->paginate(5);
        return view('beranda', compact('articles'));
    }
}
