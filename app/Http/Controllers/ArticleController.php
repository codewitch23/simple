<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        return view('articles.index');
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
        $articles = new Article();
        $articles->title = $request->title;
        $articles->excerpt = $request->excerpt;
        $articles->body = $request->body;
        $articles->save();
    }

    public function show(Article $article)
    {
        return view('articles.edit');
    }


    public function edit(Article $article)
    {

        return view('articles.edit',compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        //
    }

    public function destroy(Article $article)
    {
        //
    }
}
