<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<header>

</header>

<body>

<form action="{{route('birre.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="name"  placeholder="">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <input type="text" class="form-control" name="category" id="category"  placeholder="">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" class="form-control" name="price" id="price"  placeholder="">
            </div>
            <div class="form-group">
                <label for="">ABV</label>
                <input type="text" class="form-control" name="abv" id="abv"  placeholder="">
            </div>
            <div class="form-group">
                <label for="">FilePath</label>
                <input type="text" class="form-control" name="description" id="description"  placeholder="">
            </div>
            <div class="form-group">
                <label for="">Descrizione</label>
                <textarea class="form-control" id=""  rows="6"></textarea>
            </div>

            <div class="container">
                    <div class="row align-items-center text-secondary">
                    
                    <div class="col-6 col-lg-4 order-lg-1 text-right text-lg-left">
                        <p class="eyebrow"><button type="button" class="btn btn-outline-dark">
                <a href="{{ route('birre.index') }}">aggiungi</a>
                </button></p>
                    </div>
                    <div class="col-lg-4 text-center text-lg-right mt-4 mt-lg-0 order-lg-3">
                        <a href="mailto:contact@webuildthemes.com" class="action underline">contact@webuildthemes.com <i class="icon-arrow-right"></i></a>
                    </div>
                    </div>
                </div>
    
        </form>
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