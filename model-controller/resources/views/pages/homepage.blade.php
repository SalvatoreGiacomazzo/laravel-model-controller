@extends('layouts.layout')
@vite('resources/js/app.js')

@section("page-title", "Movie Page");

@section('main-content')

<button type="button" class="btn btn-danger text-center"><a href="{{route('movies')}}">Show Movies</a></button>

@endsection
