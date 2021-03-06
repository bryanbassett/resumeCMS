<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="I make websites for a living using Laravel, Drupal, & WordPress.">
        <link rel="canonical" href="https://bjbassett.org">
        <meta name="robots" content="index,follow">
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Bryan James Bassett">
        <meta name="twitter:description" content="The resume/portfolio of Full-Stack Developer, Bryan James Bassett">
        <meta name="twitter:image" content="https://bjbassett.org/images/bjbfsd.jpg">
        <meta name="twitter:site" content="@bryanloveswater">
        <meta name="twitter:creator" content="@bryanloveswater">
        <meta name="twitter:url" content="https://bjbassett.org">
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="Bryan James Bassett"/>
        <meta property="og:description" content="I make websites for a living using Laravel, Drupal, & WordPress."/>
        <meta property="og:image" content="https://bjbassett.org/images/bjbfsd.jpg"/>
        <meta property="og:url" content="https://bjbassett.org"/>
        <meta property="og:site_name" content="The resume/portfolio of Full-Stack Developer, Bryan James Bassett"/>
        <title>Bryan James Bassett</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Roboto:400,900&display=swap" rel="stylesheet">
        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>
    <body class=" @if(request()->get('pdf') == true) pdfnobg @endif">
        <div class="d-flex toggled" id="wrapper">
            @auth
                @include('sidebar')
            @endauth
            <div id="page-content-wrapper">

                <!-- Right Side Of Navbar -->

                <!-- Authentication Links -->


                @auth
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            @auth
                                <button class="btn btn-primary" id="menu-toggle">Editor</button>
                            @endauth
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                                </ul>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->username }} <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/home">Dashboard</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                @endauth
                <div class="py-4">
                    @yield('content')
                </div>
            </div>
        </div>

        @yield('scripts')
    </body>
</html>
