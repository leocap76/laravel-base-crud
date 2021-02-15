<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<header>
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
                    
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>
</header>






<body>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach 
        </ul>
    </div>
    @endif



    

    <div class="container">
        <form action="{{route('birre.update', $beer->id )}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="name"  value="{{ $beer->name }}">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <input type="text" class="form-control" name="category" id="category"  value="{{ $beer->category }}">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" class="form-control" name="price" id="price"  value="{{ $beer->price }}">
            </div>
            <div class="form-group">
                <label for="">ABV</label>
                <input type="text" class="form-control" name="abv" id="abv"  value="{{ $beer->abv }}">
            </div>
            <div class="form-group">
                <label for="">FilePath</label>
                <input type="text" class="form-control" name="filepath" id="filepath"  value="{{ $beer->filepath }}">
            </div>
            <div class="form-group">
                <label for="">Descrizione</label>
                <textarea class="form-control" name="description" id="description"  rows="6"></textarea>
            </div>

           <input type="submit" value="crea" class="btn btn-black">
    
        </form>
     </div>
</body>




<footer class="bg-black border-top section-sm text-white">
                <!-- torna a index -->
                
                
                <div class="container">
                    <div class="row align-items-center text-secondary">
                    
                        <div class="col-6 col-lg-4 order-lg-1 text-right text-lg-left">
                            <p class="eyebrow">
                                <button type="button" class="btn btn-outline-dark">
                                     <a href="{{ route('birre.index') }}">torna alla home</a>
                                </button>
                            </p>
                        </div>
                    
                    </div>
                </div>
    
</footer>
</html>