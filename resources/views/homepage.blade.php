<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <h1>Lista Treni</h1>

        <ul>
            @foreach ($trains as $train)
                <li> 
                    <h4>{{ $train->'departure_time' }}</h4>
                    <h4>{{ $train->'arrival_time' }}</h4>
                </li>
            @endforeach
        </ul>
    </main>

</body>

</html>
