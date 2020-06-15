<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles=Article::take(4)->latest()->get();
        return view('articles.index',compact('articles'));
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $article=Article::create(request()->validate([
            'title'=>'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]));
        return redirect($article->path());
    }

    public function show(Article $article)
    {
        return view('articles.show',compact('article'));
    }


    public function edit(Article $article)
    {
        return view('articles.edit',compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $article->title=request()->title;
        $article->excerpt=request()->excerpt;
        $article->body=request()->body;
        $article->save();
    }

    public function destroy(Article $article)
    {
        //
    }

}
