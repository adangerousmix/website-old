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

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    @yield('styles')
</head>
<body>
    <header class="container text-center mb-4">
        <a href="/"><img src="/images/shares/adm_logo.png" alt="A Dangerous Mix Logo" class="logo p-4"></a>
        <nav class="mt-4">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/podcast">Podcast</a></li>
                <li class="nav-item"><a class="nav-link" href="/comics">Comics</a></li>
                <li class="nav-item"><a class="nav-link" href="/movies">Movies</a></li>
                <li class="nav-item"><a class="nav-link" href="/tv">TV</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                @if (Auth::check())
                    <li class="nav-item"><a class="nav-link" href="/posts">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                @endif
            </ul>
        </nav>
    </header>
    <div class="container">
        <main role="main">
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