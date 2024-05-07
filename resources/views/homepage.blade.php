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


    </div>

</section>

@endsection