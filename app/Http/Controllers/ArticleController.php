<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        if(request('tag'))
        {
             $articles=Tag::where('name',request('tag'))->firstOrFail()->article;
        }
        else{
            $articles = Article::take(4)->latest()->get();
        }

        $tags=Tag::all();
        return view('articles.index',compact('articles','tags'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('articles.create', compact('tags'));
    }

    public function store()
    {
        $article = new Article(request(['title','excerpt','body']));
        $article->user_id=1;
        $article->save();
        $article->tag()->attach(request('tag'));

//        dd(request()->all());
        return redirect($article->path());
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }


    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $article->update($this->validateArticle());
    }

    public function destroy(Article $article)
    {
        //
    }

    public function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tag' => 'required'
        ]);
    }

}
