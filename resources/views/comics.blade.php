<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    {{-- collego l'header  --}}
    @include('partials.header')

    <main>
        {{-- jumbotron section --}}
        <section class="jumbotron_"></section>

        {{-- section cards --}}
        <section class="cards_">
            <div class="container">
                <div class="row ">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ $comic['thumb'] }}" class="comic_img " alt="{{ $comic['title'] }}">
                                <h5 class="card-title">{{ $comic['title'] }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            </div>
        </section>
    </main>

    {{-- collego il footer  --}}
    @include('partials.footer')

</body>

</html>
