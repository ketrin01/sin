<ul>      
@foreach($articles as $article)
<li><a href ="{{route("article.get", ["id"=>$article->id])}}">{{$article->title}}</a></li>
@endforeach      
</ul>
<form method="Post">
    <span> Article name</span>
    <input type="text" name="title" placeholder="...">
    <span> Article content</span>
    <textarea type='text' name='content' placeholder=""></textarea>
    <input type ="hiddet" name="category_id" value="1">
    <button type="submit">Add category</button>
    <button type='reset'>Cancel</button>
</form>
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('xx1.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>