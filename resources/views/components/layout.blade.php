<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit mart</title>

    @vite('resources/css/app.css')
</head>

<body>

    <header>
        <nav>
            <h1>Fruit mart</h1>
            <a href = "{{ route('Fruits.index') }}"> All Fruits </a>
            <a href = "{{ route('Fruits.create') }}"> Add a new Fruits </a>
            <a href="/">← Back to home</a>
        </nav>
    </header>

    <main class = "container">
        {{ $slot }}
    </main>

</body>

</html>
