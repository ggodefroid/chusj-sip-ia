<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.index');
    }

    public function articlecreate(){
        return view('admin.articlecreate');
    }

    public function articlesindex()
    {
        $articles = Article::paginate(7);
        return view ('admin.articlesindex',[
            'articles' => $articles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        
        $filename = time(). '.' .$request->avatar->extension();
    
        $path = $request->avatar->storeAs(
            'avatar', 
            $filename,
            'public'
        );
        $validated = $request->validated();

        $article = Article::create([
            'title' => $request->title,
        ]);

        $image = new Image();

        $image->path = $path;
        
        $article->image()->save($image);

        $article->title = $request->title;
        
        
        return redirect()->route('adminarticles')->with('success', "L'article a bien été sauvegardé !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        
    }
}
