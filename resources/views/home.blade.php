<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <h1>birre</h1>

            @foreach($beers as $beer)

            
            <div>
                <h2>{{ $beer->name }}</h2>
                <p>{{ $beer->category}}</p>
                <h4>{{ $beer->price }} €</h4>
                <p>{{ $beer->description }}</p>
                <img src="{{ $beer->filepath }}" alt="">
                <a href="{{ route('birre.show', $beer->id) }}" class="btn-black">btn</a>
            </div>
            @endforeach
        </div>
    </body>
</html>
