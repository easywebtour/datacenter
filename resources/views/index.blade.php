<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <title>Document</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>
<body>

    <div id="doc">
        <header id="header" class="flax-center">
            <div class="content">

            </div>

            <nav>
                @include('partials.nav')
            </nav>
        </header>


        <main>
            @yield('content')
        </main>


    </div>
</body>
</html>
