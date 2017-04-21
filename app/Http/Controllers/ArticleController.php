<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Category;

class ArticleController extends Controller
{
public function get() {
        $id = request()->route("id");
        if(is_null($id)){
        $articles = Article::all();
        return view('articles',["articles"=>$articles]);
        }
        $article = Article::find($id);
        if(is_null($id)){
            return redirect(route("article.get"));
        }
        return view ("article", ["articles"=>$article]);
}

public function post(){
        $data = request()->all();
        $title = array_get($data,"title");
        $content = array_get($data, "content");
        $category_id=array_get($data,"category_id");
        if(is_null($title)|| strlen($title)==0){
            return redirect(route("article.get"));
        }
        if(is_null($content)|| strlen($content)==0){
            return redirect(route("article.get"));
        }
        $article = new Article();
        $category = Category::find($category_id);
        $article ->category()->associate($category);
        $article->title = $title ;
        $article->content = $content;
        $article->save();
        return (redirect(route("category.get")));
}
}
