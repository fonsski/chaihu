<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>@yield('page.title', config('app.name'))</title>
</head>

<body>
    @include('components.header')
    <div class="container">
        @yield('content')
    </div>
    @include('components.footer')
</body>

</html>
