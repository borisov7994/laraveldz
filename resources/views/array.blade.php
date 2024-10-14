<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@for ($i = 0; $i < 1; $i++)
    <p>{{ @array->$id }}</p>
    <p>{{ @array->$title }}</p>
    <p>{{ @array->$price }}</p>
    <p>{{ @array->$path }}</p>
@endfor
</body>
</html>