<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@if (trim($__env->yieldContent('title')))@yield('title') | @endif {{ config('app.name', 'Laravel') }}</title>


    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>
<body @guest class="logged-out" @else class="logged-in" @endguest>

    <div id="doc">
            @auth
        <header id="page-header" class="page-header">

            <div id="page-topbar" class="page-topbar">
                <nav class="navbar navbar-expand-md navbar-dark">

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

                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @else

                            <li class="nav-item">

                                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">ออกจากระบบ</a>


                                {{-- <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Log out') }}

                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf
                                </form> --}}
                            </li>

                            @endguest

                        </ul>
                    </div>
                </nav>
            </div>

            @auth
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
            @endauth


        </header>
        @endauth

        <main id="page-main" class="page-main layout__box o__flexes-to-1 o__has-rows">
            @yield('content')
        </main>
    </div>


    <div class="modals">

    {{-- set model: logout --}}
    @component('components.model', [
        'id' => 'logoutModal',
        'form'=> [
            'action'=> route('logout'),
            'method'=> 'POST'
        ],
        'title' => "ออกจากระบบ"
    ])

        ยืนยันการออกจากระบบหรือไม่?

        @slot('buttons')

            <button type="submit" class="btn btn-primary">ออกจากระบบ</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        @endslot
    @endcomponent

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

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
