<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
            <div class="container">
                <h2>{{ $beer->name }}</h2>
                <p>{{ $beer->category}}</p>
                <h4>{{ $beer->price }} €</h4>
                <p>{{ $beer->description }}</p>
                <img src="{{ $beer->filepath }}" alt="">
            </div>     
</body>
            <footer>
                <!-- torna a index -->
                <a href="{{ route('birre.index') }}">torna alla home</a>
            </footer>
</html>