{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits mart</title>
</head>
<body>
    <h2>Fruit id - {{ $id }} </h2>
</body>
</html> --}}


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit details</title>
</head>
<body>
    <h2>Fruit details</h2>
    <p><strong>ID:</strong> {{ $fruit['id'] }}</p>
    <p><strong>Price:</strong> {{ $fruit['price'] }} IDR</p>
    <p><strong>Stock:</strong> {{ $fruit['Stock'] }} Kg</p>

    <a href="/Fruits">← Back to list</a>
</body>
</html>



