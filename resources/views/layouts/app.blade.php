<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/48c57567fc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <link rel="stylesheet" href=" {{ asset('/css/app.css') }} ">
    @yield('css-link')
</head>
<body>
    
    <div class="content">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('js-link')

</body>
</html>