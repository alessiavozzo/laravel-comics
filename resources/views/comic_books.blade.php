@extends("layouts.app")

@section("page-title", 'Comic books')

@section("content")

<section id="comics-info" class="py-4">
    <div class="container">
        <div class="row row-cols-1 g-5">

            @foreach($comic_books as $comic_book)
            <div class="col">
                <div class="comic_book d-flex rounded border">
                    <div class="comic_image w-25">
                        <img class="comic_book_image w-100" src="{{$comic_book['thumb']}}" alt="comic-image" />
                    </div>
                    <div class="info w-75 p-4">
                        <h4 class="comic_name text-center">{{$comic_book["series"]}}</h4>
                        <p class="text">{{$comic_book["description"]}}</p>
                        <a href="#" class="btn btn-success rounded-0">{{$comic_book["price"]}}</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection