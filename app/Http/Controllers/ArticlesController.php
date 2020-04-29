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


    public function show($id)
    {
        //show a single resource
        $article = Article::find($id);

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
    }

    public function edit()
    {
        //show a view to edit an existing form
    }

    public function update()
    {
        //persist the edited resource

    }

    public function destroy()
    {
        //delete the resource
    }
}
