<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$image_url='https://w7.pngwing.com/pngs/4/706/png-transparent-web-development-computer-icons-domain-name-website-text-logo-internet-thumbnail.png';
?>
<body>
    <div class="flex justify-between">
        <img src="<?php echo $image_url;?>" width="100" height="100">
        <ul class="navigation_header">
            <li>Главная</li>
            <a href="{{route('array')}}"> Массивы</a>
        </ul>
    </div>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
            Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. 
            Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>
        </div>
        @foreach($array as $product)
            <div class="bg-white border rounded-lg shadow-md p-4">
                <img src="{{ asset($product['path']) }}" alt="{{ $product['title'] }}" class="w-full h-32 object-cover mb-2">
                <h3 class="font-bold text-lg">{{ $product['title'] }}</h2>
                <p class="text-gray-700">{{ $product['price'] }}₽</p>
            </div>
        @endforeach
    <div class="footer">
        <p>Мидис</p>
        <p>Борисов Кирилл Александрович</p>
        <p>2024 год</p>
    </div>
</body>
</html>