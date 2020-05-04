<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        // request()->validate([

        //     'title'=>'required',
        //     'excerpt'=>'required',
        //     'body' => 'required'
        // ]);

        // $article = new Article();
        // $article->title= request('title');
        // $article->excerpt= request('excerpt');
        // $article->body= request('body');
        // $article->save();

        // Article::create([
        //     'title'=>request('title'),
        //     'excerpt'=>request('excerpt'),
        //     'body'=>request('body')
        // ]);

        // Article::create(request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' =>'required'
        // ]));
        Article::create($this->validateArticle());


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
        // method 1
        //persist the edited resource
        // request()->validate([

        //     'title'=>'required',
        //     'excerpt'=>'required',
        //     'body' => 'required'
        // ]);
        // method 2
        // $article = Article::find($article);
        // $article->title= request('title');
        // $article->excerpt= request('excerpt');
        // $article->body= request('body');
        // $article->save();

        // $article->update(request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' =>'required'
        // ]));
        // method 3
        $article->update($this->validateArticle());

        // return redirect('/articles/'. $article->id);
        // return redirect(route('articles.show',$articles));
           return redirect($article->path());


    }

    public function destroy()
    {
        //delete the resource
    }

    public function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' =>'required',
            'body' => 'required'
        ]);
    }

}
