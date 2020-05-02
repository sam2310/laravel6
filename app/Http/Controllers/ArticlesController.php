<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // render a list of resources
    public function index()
    {
        $article = Article::latest()->get();

        return view('articles.index', ['articles'=>$article]);
    }


    public function show(Article $article)
    {
        //show a single resource
        // $article = Article::find($id);

        return view('articles.show',['article'=>$article]);
        // dd($articleId);
    }

    public function create()
    {
        //show a view o create a new resource
        return view ('articles.create');

    }

    public function store()
    {
        //persist the new resource
        // die('hello');
        // dump(request()->all());
        request()->validate([

            'title'=>'required',
            'excerpt'=>'required',
            'body' => 'required'
        ]);

        // $article = new Article();
        // $article->title= request('title');
        // $article->excerpt= request('excerpt');
        // $article->body= request('body');
        // $article->save();

        Article::create([
            'title'=>request('title'),
            'excerpt'=>request('excerpt'),
            'body'=>request('body')
        ]);

        return redirect('/articles');

    }

    public function edit(Article $article)
    {
        //show a view to edit an existing form
        // find article associated with the id
        // $article = Article::find($id);

        return view('articles.edit', compact('article'));

    }

    public function update(Article $article)
    {
        //persist the edited resource
        request()->validate([

            'title'=>'required',
            'excerpt'=>'required',
            'body' => 'required'
        ]);

        $article = Article::find($id);
        $article->title= request('title');
        $article->excerpt= request('excerpt');
        $article->body= request('body');
        $article->save();



        return redirect('/articles/'. $article->id);

    }

    public function destroy()
    {
        //delete the resource
    }
}
