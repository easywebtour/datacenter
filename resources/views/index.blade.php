<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- font-awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div id="doc">

        <header id="page-header" class="page-header">

            <nav id="page-topbar" class="navbar navbar-expand-md navbar-dark page-topbar">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <h1 style="line-height: 1;font-size: 14px;">Datacenter</h1>
                    <h2 style="line-height: 1;font-size: 10px;">Easy Web Tour</h2>
                    {{-- {{ config('app.name', 'Easy Web Tour') }} --}}
                </a>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Log out') }}

                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf
                            </form>
                        </li>


                    </ul>
                </div>
            </nav>

            <button type="button" id="page-navigation-trigger" class="page-navigation-trigger"><span></span></button>
            <nav id="page-navigation" class="page-navigation">

                <div class="layout__box o__has-rows h-100">

                    <div class="layout__box page-navigation-header"></div>

                    <div class="layout__box o__scrolls o__flexes-to-1 position-relative" role="navigation">
                        @include('layouts.nav.middle')
                    </div>

                    <div class="layout__box">
                        @include('layouts.nav.bottom')
                    </div>
                </div>
            </nav>

        </header>

        <main id="page-main" class="page-main">
            @yield('content')
        </main>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>


        $(function () {
            $('#page-navigation-trigger').click( (evt) => {
                evt.preventDefault();

                $('body').toggleClass('is-pushed-left');
            });
        })

    </script>
</body>
</html>
