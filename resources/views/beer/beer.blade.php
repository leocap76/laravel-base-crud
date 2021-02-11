<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="{{ route('birre.index') }}">BIRRE</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                      <a class="nav-link" href="{{ route('birre.index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Dropdown
                         </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
            <div class="container">
                <h2>{{ $beer->name }}</h2>
                <p>{{ $beer->category}}</p>
                <h4>{{ $beer->price }} €</h4>
                <p>{{ $beer->description }}</p>
                <img src="{{ $beer->filepath }}" alt="">
            </div>     
</body>
        <footer class="bg-black border-top section-sm text-white">
                <!-- torna a index -->
                
                
                <div class="container">
                    <div class="row align-items-center text-secondary">
                    
                    <div class="col-6 col-lg-4 order-lg-1 text-right text-lg-left">
                        <p class="eyebrow"><button type="button" class="btn btn-outline-dark">
                <a href="{{ route('birre.index') }}">torna alla home</a>
                </button></p>
                    </div>
                    <div class="col-lg-4 text-center text-lg-right mt-4 mt-lg-0 order-lg-3">
                        <a href="mailto:contact@webuildthemes.com" class="action underline">contact@webuildthemes.com <i class="icon-arrow-right"></i></a>
                    </div>
                    </div>
                </div>
    
            </footer>
</html>