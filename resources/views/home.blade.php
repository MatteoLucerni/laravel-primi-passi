<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css' integrity='sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==' crossorigin='anonymous'/>
    <title>Home</title>
</head>
<style>
    ul{
        list-style: none;
    }

    li{
        margin: 0 15px
    }

    a:hover{
        background-color: lightgray;
    }
</style>
<body>
    <div class="container">
        
        
        
        <nav class="navbar">
            <h1>{{ $greet }} {{ $name }}!</h1>
            <ul class="d-flex mb-0">
                <li class="nav-item">
                    <a class="nav-link border p-2" href="{{ route('games') }}">Giochi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border p-2" href="{{ route('books') }}">Libri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border p-2" href="{{ route('films') }}">Film</a>
                </li>
            </ul>
        </nav>
    </div>
    
</body>

</html>