<!DOCTYPE html>
<html>
    <head>
        <title>Elo elo</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('main.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src ="{{asset('jquery.min.js')}}" defer=></script>
        <script src ="{{asset('script.js')}}"></script>
    </head>  
    <body class="container-fluid">
        <div class="container-fluid">
            <div class="col-md-2"></div>
            <div class="col-xs-8"></div>
        <nav class="main-menu">
            @include('menu')
        </nav>
        </div>
        <div class="col-md-2"></div>
    </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-xs-8">
                 <section class="klaseczka">
        <section>
            <article class="klaseczka">
              @yield('content')  
            </article>
        </section>
            </div> 
            <div class="col-md-2"></div>
        </div>
        <footer>
            
        </footer>    
    </body> 
    <button id="bgChanger" type="button" class="btn btn-danger" onclick="changeBg('{{asset('zdjecie.jpg')}}','{{asset('bp.jpg')}}')" >change bg</button>
</html>