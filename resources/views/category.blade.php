<h4>{{$category->name}}</h4>
</ul>
@foreach ($category->articles as $article)
<li>{{$article->title}}</li>
@endforeach
</ul>

<form method="POST">
    <span>Title</span>
    <input type=text" name="title" placeholder="..."
           </br>
    <span>Content</span>
    <textarea name="content" rows="3"> </textarea>
    
    </br>
    <button type="submit">Add article </button>
    <button type="reset">Cancel</button>
</form>