
<h4> {{$article->title}}</h4>
<ul> 
@foreach ($article->articles as $article)
<li> {{$article->content}}</li>
@endforeach
</ul>

