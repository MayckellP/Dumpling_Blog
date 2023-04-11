<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Dumpling') }}</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
    </head>
    <div class="container-fluid">
        @include('layouts.navbar')
        </div>
       {{--   blog cards  --}}
        <div class="container">
            <div class="cards grid-row">
              <div class="card">
                <div class="card-top">
                  <img src="img1.jpg" alt="Blog Name">
                </div>
                <div class="card-info">
                  <h2>JavaScript Quote Generator</h2>
                  <span class="date">Monday, Jan 20, 2021</span>
                  <p class="excerpt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="card-bottom flex-row">
                  <a href="#" class="read-more">Read Full Blog</a>
                  <a href="#" class="button btn-yellow">Blog</a>
                </div>
              </div>
              <div class="card">
                <div class="card-top">
                  <img src="img2.jpg" alt="Blog Name">
                </div>
                <div class="card-info">
                  <h2>How to Build HTML Minifier</h2>
                  <span class="date">Monday, Jan 20, 2021</span>
                  <p class="excerpt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="card-bottom flex-row">
                  <a href="#" class="read-more">Read Full Blog</a>
                  <a href="#" class="button btn-sky">Blog</a>
                </div>
              </div>
              <div class="card">
                <div class="card-top">
                  <img src="img3.jpg" alt="Blog Name">
                </div>
                <div class="card-info">
                  <h2>How to Build Signature Pad</h2>
                  <span class="date">Monday, Jan 20, 2021</span>
                  <p class="excerpt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="card-bottom flex-row">
                  <a href="#" class="read-more">Read Full Blog</a>
                  <a href="#" class="button btn-dpink">Blog</a>
                </div>
              </div>
              <div class="card">
                <div class="card-top">
                  <img src="img4.jpeg" alt="Blog Name">
                </div>
                <div class="card-info">
                  <h2>How to Build Gsap Gallery</h2>
                  <span class="date">Monday, Jan 20, 2021</span>
                  <p class="excerpt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="card-bottom flex-row">
                  <a href="#" class="read-more">Read Full Blog</a>
                  <a href="#" class="button btn-dpink">Blog</a>
                </div>
              </div>
            </div>    
          </div>
</html>