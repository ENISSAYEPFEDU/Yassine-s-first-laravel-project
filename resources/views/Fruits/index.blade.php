<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits list</title>
</head>
<body>
    <h1>Currently available fruits </h1>
    <p>{{  $greetings  }}</p>



    <ul>
        @foreach ($Fruits as $Fruit)
        <li>
            <p>{{ $Fruit['name'] }} </p>
            <a href="/Fruits/{{ $Fruit['id'] }}">View details</a>
        </li>
        @endforeach
    </ul>
</body>
</html>

