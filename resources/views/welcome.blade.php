<!DOCTYPE html>
<html>
    <head>
        <title>Elo elo</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('main.css')}}">
    </head>  
    <body>
        <nav class="main-menu">
            @include('menu')
        </nav>
        <section>
            <article class="klaseczka">
              @yield('content')  
            </article>
        </section>
        <footer>
            
        </footer>       
    </body> 
</html>