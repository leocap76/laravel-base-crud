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

        <div class="container">         
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOME</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">DESCRIPTION</th>
                    </tr>
                </thead>               

                <tbody>
                @foreach($beers as $beer)
                    <tr>
                        <th scope="row">1</th>
                            <td><h2>{{ $beer->name }}</h2></td>
                            <td><p>{{ $beer->category}}</p></td>
                        <td><h4>{{ $beer->price }} €</h4></td>
                        <td><p>{{ $beer->description }}</p></td>
                        <!-- <td><img src="{{ $beer->filepath }}" alt=""></td> -->
                        <td><a href="{{ route('birre.show', $beer->id) }}" class="btn btn-primary"> MOSTRA</a></td>
                        <td><a href="{{ route('birre.edit', $beer->id) }}" class="btn btn-primary"> EDIT</a></td>
                        <td>
                          <form action="{{ route('birre.destroy', $beer->id) }}" method = "post">
                          @csrf
                          @method('DELETE')
                              <button class=" btn btn-primary">
                                DELETE
                              </button>

                          </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                </div>   
        </div>
      </body>
</html>
