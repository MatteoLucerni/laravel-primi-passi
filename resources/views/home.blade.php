<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>{{ $greet }} {{ $name }}!</h1>
    <!-- @dump($games) -->
    <ul>
        @forelse($games as $game)
        <li>
            <h3>
                {{ $game['title'] }}
            </h3>
            <p>
                Data di uscita: {{ $game['year'] }}
            </p>
        </li>
        @empty
        <h3>Non ci sono giochi disponibili</h3>
        @endforelse
    </ul>
</body>

</html>
