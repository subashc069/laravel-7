<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
class ArticleController extends Controller
{
    public function index()
    {
        if (request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        }else{
            $articles = Article::latest()->get();
        }
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {   
        Article::create($this->validatedArticle());
        return redirect(route('article.index'));
    }

    public function show(Article $article)
    {
        return view('articles.show',[
            'article' => $article
        ]);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        $article->update($this->validatedArticle());

        return redirect($article->path());
    }


    public function validatedArticle() {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }

}
