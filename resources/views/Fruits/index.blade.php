<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits are very healthyyy</title>
</head>
<body>
    <h1>Currently available fruits </h1>
    <p>{{  $greetings  }}</p>

    <ul>
        <li>
            <a href="Fruits/{{  $Fruits[0] ["id"]  }}" > 
                {{ $Fruits[0] ["name"]  }}
            </a>
        </li>
        <li>
            <a href="Fruits/{{  $Fruits[1] ["id"]  }}" > 
                {{ $Fruits[1] ["name"]  }}
            </a>
        </li>

    </ul>
</body>
</html>

