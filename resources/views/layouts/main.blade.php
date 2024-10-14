<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<?php
$image_url='https://w7.pngwing.com/pngs/4/706/png-transparent-web-development-computer-icons-domain-name-website-text-logo-internet-thumbnail.png';
?>
<body>
    <header class="md:mx-auto justify-center items-center">
        <ul>
            <img src="<?php echo $image_url;?>" width="100" height="100">
            <li>Главная</li>
            <a href="{{route('array')}}"> Массивы</a>
        </ul>
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