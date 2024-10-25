@extends('layouts.layout')
@vite('resources/js/app.js')

@section("page-title", "Movie Page")

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
<h1 class="text-center text-warning">main content</h1>
        </div>
       @forelse($movies as $movie)
        <div class="col-3 mb-1 ">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://w7.pngwing.com/pngs/783/609/png-transparent-clapperboard-film-cinema-post-production-studio-miscellaneous-angle-text.png">
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <h6 class="card-title">{{$movie->original_title}}</h6>
              <p class="card-text">{{$movie->date}}</p>
              <p class="card-text">{{$movie->vote}}</p>
              <p class="card-text">{{$movie->nationality}}</p>
            </div>
          </div>
        </div>
        @empty
        <div class="col-12"><h1>No Movie was found...</h1></div>
@endforelse
@endsection
