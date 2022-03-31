<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function recherche(){
        return view('recherche');
    }

    public function index(){
        $articles = Article::paginate(4);
        return view('articles',[
            'articles' => $articles
        ]);
    }

    public function show($slug){
        $article = Article::where('slug', $slug)->firstOrFail();
        
        return view('article', [
            'article' => $article
        ]);  }

    public function mission(){
        return view('mission');
    }

    public function financement(){
        return view('financement');
    }

    public function infrastructure(){
        return view('infrastructure');
    }

    public function db(){
        return view('db');
    }

    public function decision(){
        return view('decision');
    }

    public function algorithmes(){
        return view('algorithme');
    }
}
