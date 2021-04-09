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

    <link rel="icon" type="image/png" href="/favicon.ico" />
    <link rel="icon" type="image/png" href="https://adangerousmix.com/favicon.ico" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700|Oswald" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    @yield('styles')
</head>

<body>
    <header class="flex justify-center border-solid border-black border-4 p-2 m-2 mb-1" style="background-color: #FF0000; height: 176px;">
        <a href="/"><img class="w-32" src="/images/adm-logo.svg" alt="ADangerousMix"></a>
    </header>
    <nav class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-8">
        <a class="menu-link border-solid border-black border-4 p-2 m-2 my-1 text-center font-bold text-white align-middle" style="background-color: #1DA1F2;" href="https://twitter.com/adangerousmix">
            <img class="inline-block w-16 -mt-2" src="/images/twitter.svg" alt="Twitter"><br>
            <span class="block -mt-4">Twitter</span>
        </a>
        <a class="menu-link border-solid border-black border-4 p-2 m-2 my-1 text-center font-bold text-white align-middle" style="background-color: #9146FF;" href="https://twitch.tv/adangerousmix">
            <img class="inline-block w-16 -mt-2" src="/images/twitch.svg" alt="Twitch"><br>
            <span class="block -mt-4">Twitch</span>
        </a>
        <a class="menu-link border-solid border-black border-4 p-2 m-2 my-1 text-center font-bold text-white align-middle" style="background-color: #FF0000;" href="https://www.youtube.com/channel/UCLpB_yYrVugRdjTf4tG4Z7A">
            <img class="inline-block w-16 -mt-2" src="/images/youtube.svg" alt="YouTube"><br>
            <span class="block -mt-4">YouTube</span>
        </a>
        <a class="menu-link border-solid border-black border-4 p-2 m-2 my-1 text-center font-bold text-white align-middle" style="background-color: #7289DA;" href="https://discord.gg/7N5HJq9">
            <img class="inline-block w-16 -mt-2" src="/images/discord.svg" alt="Discord"><br>
            <span class="block -mt-4">Discord</span>
        </a>
        <a class="menu-link border-solid border-black border-4 p-2 m-2 my-1 text-center font-bold text-white align-middle" style="background-color: #1DA1F2; background: linear-gradient(45deg, rgba(255,184,80,1) 0%, rgba(179,53,184,1) 100%);" href="https://www.instagram.com/adangerousmix/">
            <img class="inline-block w-16 -mt-2" src="/images/instagram.svg" alt="Instagram"><br>
            <span class="block -mt-4">Instagram</span>
        </a>
        <a class="menu-link border-solid border-black border-4 p-2 m-2 my-1 text-center font-bold text-white align-middle" style="background-color: #25F4EE; background: linear-gradient(45deg, rgba(37,244,238,1) 0%, rgba(254,44,85,1) 100%);" href="https://www.tiktok.com/@adangerousmix">
            <img class="inline-block w-16 -mt-2" src="/images/tiktok.svg" alt="Tik Tok"><br>
            <span class="block -mt-4">Tik Tok</span>
        </a>
        <a class="menu-link border-solid border-black border-4 p-2 m-2 my-1 text-center font-bold text-white align-middle" style="background-color: #00EE00;" href="/custom-widgets">
            <img class="inline-block w-16 -mt-2" src="/images/custom-widgets.svg" alt="Custom Widgets"><br>
            <span class="block -mt-4">Custom Widgets</span>
        </a>
        <a class="menu-link border-solid border-black border-4 p-2 m-2 my-1 text-center font-bold text-white align-middle" style="background-color: #FE5F00;" href="/wp">
            <img class="inline-block w-16 -mt-2" src="/images/watch-party.svg" alt="Watch Party"><br>
            <span class="block -mt-4">Watch Party</span>
        </a>
    </nav>
    <main role="main" class="border-solid border-black border-4 p-2 m-2 mt-1">
        @yield('content')
    </main>
    <footer class="flex justify-center border-solid border-4 border-black p-2 m-2">
        <p>&copy; <?php echo date('Y'); ?> Ned Fenstermacher. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}"></script>
    @yield('scripts')
    @if (Auth::guest() && Request::root() != 'http://adm.test')
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-84730016-1', 'auto');
        ga('send', 'pageview');
    </script>
    @endif
</body>

</html>