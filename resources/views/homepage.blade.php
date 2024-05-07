@extends("layouts.app")

@section("content")

<div class="container">
    <div class="row row-cols-1 row-cols-sm-4 row-cols-lg-6">


        <!-- foreach to loop in comics -->
        @foreach($comics as $comic)

        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{$comic['thumb']}}" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">{{$comic["title"]}}</h4>
                </div>
            </div>

        </div>
        @endforeach

    </div>
</div>

@endsection