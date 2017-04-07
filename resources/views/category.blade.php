@extedns('welcome')
<h4>{{$category->name}}</h4>
</ul>
@foreach ($category->articles as $article)
<li>{{$article->title}}</li>
@endforeach
</ul>
@section('content')
<h4>{{$category->name}}</h4>
</ul>
@foreach ($category->articles as $article)
<li>{{$article->title}}</li>
@endforeach
</ul>

<form class="category.form" method="POST" action="{{route("article.post")}}">
    <div claas="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" placeholder="...">
    </div>
    <div class="form-group">
        <label><content></label>
        <textarea name="content" class="form-control" row="3"></textarea>
    </div>
    <input type="hidden" name="category_id" value="{{$category->id}}">
    <input type="hidden" name="token" value="{{csrf_token()}}">
    
  
    <button type="submit" class="btn btn-default"> Add article </button>
    <button type="reset" class="btn btn-default"> Cancel </button>
</form>

@stop