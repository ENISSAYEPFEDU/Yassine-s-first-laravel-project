<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruits mart</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class= "text-center px-8 py-12">
    <h1>Welcome ! </h1>
    <p>Click the button bellow to view list of fruits . </p>


    <a href= "/Fruits" class="btn mt-4 inline-block ">
        Find fruits
    </a>
    {{-- Auth links --}}
    <div class="mt-8 flex justify-center gap-4">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="btn">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="btn">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn">
                        Register
                    </a>
                @endif
            @endauth
        @endif
    </div>


</body>

</html>
