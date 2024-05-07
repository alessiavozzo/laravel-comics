@extends("layouts.app")

@section("content")

<section id="current-series" class="bg-dark">
    <div class="container">
        <span class="title text-uppercase text-white fw-bold d-inline-block text-center bg-primary p-2 mb-4">Current series</span>
        <div class="row row-cols-1 row-cols-sm-4 row-cols-lg-6 g-3">


            <!-- foreach to loop in comics -->
            @foreach($comics as $comic)

            <div class="col">
                <div class="comic">
                    <img class="comic-image" src="{{$comic['thumb']}}" alt="">
                    <div class="comic-title text-white text-uppercase">{{$comic["series"]}}</div>
                </div>

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

<section id="buy-banner" class="bg-primary py-4">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-5 gx-4">

            <div class="col">
                <div class="product d-flex align-items-center gap-2">
                    <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                    <div class="text text-uppercase text-white">Digital Comics</div>
                </div>
            </div>
            <div class="col">
                <div class="product d-flex align-items-center gap-2">
                    <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                    <div class="text text-uppercase text-white">Dc merchandise</div>
                </div>
            </div>
            <div class="col">
                <div class="product d-flex align-items-center gap-2">
                    <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                    <div class="text text-uppercase text-white">subscription</div>
                </div>
            </div>
            <div class="col">
                <div class="product d-flex align-items-center gap-2">
                    <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                    <div class="text text-uppercase text-white">comic shop locator</div>
                </div>
            </div>
            <div class="col">
                <div class="product d-flex align-items-center gap-2">
                    <img src="{{Vite::asset('resources/img/buy-dc-power-visa.png')}}" alt="">
                    <div class="text text-uppercase text-white">dc power visa</div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection