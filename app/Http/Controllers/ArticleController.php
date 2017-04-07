<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Category;

class ArticleController extends Controller
{
    //
}
return view("article", ["article"=>$article]);

}

public function create(){
    $data = request()->all();
    $title = array_get($data,"title");
    $content = array_get($data, "content");
    $category_id = array_get($data, "category_id");
    
    $article = new Article();
    $category = Category::find($category);
    $article->category()->($category);
    $article->title = $title
            
}