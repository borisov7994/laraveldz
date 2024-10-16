<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <header class="flex flex-row">    <p>Главная</p>
            <p><a href="{{route('array')}}"> Массивы</a></p>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
    <p>Мидис</p>
    <p>Борисов Кирилл Александрович</p>
    <p>2024 год</p>
    </footer>
</body>
</html>