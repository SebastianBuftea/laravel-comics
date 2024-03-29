@extends('layout.app')
@section('content')
    <main>
        {{-- jumbotron section --}}
        <section class="jumbotron_"></section>

        {{-- section cards --}}
        <section class="cards_">
            <div class="container py-3">
                <div class="row ">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <a href="{{ route('detail-comic', ['param' => $comic['id']]) }}">
                                <div class="card my-2 card_style">
                                    <img src="{{ $comic['thumb'] }}" class="comic_img " alt="{{ $comic['title'] }}">
                                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>

        </section>
    </main>
@endsection
