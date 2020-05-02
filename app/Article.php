<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Article::where('slug', $article)->first();
    // public function getRouteKey()
    // {
    //     return 'slug';
    // }

     protected $fillable =['title','excerpt','body'];
}
