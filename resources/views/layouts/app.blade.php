<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @hasSection('title')
            @yield('title') - {{ config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" 
      type="image/png" 
      href="adm.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700|Oswald" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    @yield('styles')
</head>
<body>
    <header class="row container mx-auto">
        <div class="col-md-12 text-center my-4">
            <a href="/">
                <img src="/logo.png" alt="A Dangerous Mix Logo" class="logo align-top pt-1">
            </a>
        </div>
        <nav class="navbar navbar-expand-sm navbar-light text-center col-md-12 mb-4" style="background-color: #ffffff;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo01">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/podcast">Podcast</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/comics">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/movies">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tv">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/posts">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                    @endif
                </ul>
                <!-- <form class="form my-2 my-lg-0 w-100">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>
    </header>
    <div>
        <main role="main" class="container">
            @yield('content')
        </main>
    </div>
    <footer class="container text-center mt-4">
        <p>&copy; <?php echo date('Y'); ?> Ned Fenstermacher. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}"></script>
    @yield('scripts')
    @if (Auth::guest() && Request::root() != 'http://adm.test')
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-84730016-1', 'auto');
            ga('send', 'pageview');
        </script>
    @endif
</body>
</html>