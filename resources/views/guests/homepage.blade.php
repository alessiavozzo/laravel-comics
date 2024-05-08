@extends('layouts.app')

@section('content')
    <section id="current-series" class="bg-dark">
        <div class="container">
            <span
                class="section-title text-uppercase text-white fw-bold d-inline-block text-center bg-primary p-2 mb-4">Current
                series</span>
            <div class="row row-cols-1 row-cols-sm-4 row-cols-lg-6 g-3">


                <!-- foreach to loop in comics -->
                @foreach ($comics as $index => $comic)
                    <div class="col">
                        <a class="comic-link text-decoration-none" href="{{ route('comic', ['id' => $index]) }}">
                            <div class="comic">
                                <img class="comic-image mb-2" src="{{ $comic['thumb'] }}" alt="">
                                <div class="comic-title text-white text-uppercase">{{ $comic['series'] }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            <div class="load pt-4 pb-3 text-center">
                <button type="button" class="btn btn-primary text-white fw-bold px-5 rounded-0">
                    LOAD MORE
                </button>
            </div>
        </div>

    </section>

    <section id="buy-banner" class="bg-primary py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 gx-4">

                @foreach ($banner_links as $key => $link)
                    <div class="col">
                        <div class="product d-flex align-items-center gap-2">
                            <img src="{{ Vite::asset('resources/img/' . $link['image']) }}" alt="">
                            <div class="text text-uppercase text-white">{{ $link['text'] }}</div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
