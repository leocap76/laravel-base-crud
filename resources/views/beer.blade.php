<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                  <a class="navbar-brand" href="{{ route('birre.index') }}">BIRRE</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                      <a class="nav-link" href="{{ route('birre.index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ route('birre.create') }}">crea <span class="sr-only">(current)</span></a>
                    </li>
                    
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-primary" type="submit">Search</button>
                </form>
              </div>
            </nav>


   <div class="container mt-5 mb-5">
      <h2>{{ $beer->name }}</h2>
      <p>{{ $beer->category}}</p>
      <h4>{{ $beer->price }} €</h4>
      <p>{{ $beer->description }}</p>
       <img src="{{ $beer->filepath }}" class="img-thumbnail rounded mx-auto d-block" alt="">
   </div>     
</body>

 <footer class="bg-black border-top section-sm text-white mt-5 mb-5">
                <!-- torna a index -->             
     <p class="eyebrow">
      <button type="button" class="btn btn-outline-dark">
        <a href="{{ route('birre.index') }}">torna alla home</a>
      </button>
    </p> 
</footer>

</html>