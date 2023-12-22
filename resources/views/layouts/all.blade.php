<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <meta property="og:locale" content="ru_RU" >
    <meta property="og:type" content="website" >
    <meta property="og:title" content="@yield('title')" >
    <meta property="og:description" content="@yield('description')" >
    <meta property="og:url" content="{{route('home')}}" >
    <meta property="og:site_name" content="Студия звукозаписи ЭПИЦЕНТР ZVUK.FM" >
    <meta property="og:image" content="{{asset('img/og_img.jpg')}}" >
    <meta property="og:image:type" content="image/jpeg" >
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{asset('/img/favicons/fav.svg')}}" sizes="any">

    <meta name="_token" content="{{ csrf_token() }}">

    @vite([
        'resources/css/app.css',
        'public/scss/main.scss',
        'resources/js/app.js',
        'public/js/main.js'
    ])
</head>
<body>

    <header @class(['header', 'main_header' => Route::currentRouteName() === 'home'])>
        <a class="logo" href="#">
            <img src="{{ asset('img/logo.svg') }}" alt="Туристический кластер Курской области">
        </a>

        <div class="icon-menu_wrapper">
            <button type="button" class="icon-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </header>

    <main>
        @yield('main')
    </main>

    <footer>

    </footer>

</body>
</html>
