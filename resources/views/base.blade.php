<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Nya-bot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="NYA-BOT" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{app()->environment('production') ? secure_asset('images/logo_companyy') : asset('images/logo_companyy') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- App css -->
    <link href="{{ app()->environment('production') ? secure_asset('css/app.css') : asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ app()->environment('production') ? secure_asset('css/create.css') : asset('css/create.css') }}" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2567917163914793"
    crossorigin="anonymous"></script>
</head>
<body>

<header>
    @include('header')
</header>

<main>
    @yield('content')
</main>

<footer>
    @include('footer')
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/clike/clike.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/python/python.min.js"></script>

@yield('js')

</body>
</html>
