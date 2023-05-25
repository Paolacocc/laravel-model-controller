<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-model-controller</title>



    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <h2 class="text-center p-4">BEST MOVIES</h2>
        <div class="container">
            <div class="row row-cols-4 g-4">
                @foreach ($movies as $movie)
                <div class="col">
    
                    <div class="card" >
                        <img class="card-img-top" src="{{ $movie->image }}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->original_title }}</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">{{ $movie->nationality }}</li>
                            <li class="list-group-item">{{ $movie->date }}</li>
                            <li class="list-group-item">{{ $movie->vote }}</li>
                        </ul>
                        
                    </div>
                </div>
                @endforeach
    
            </div>
        </div>

    </main>


</body>

</html>
