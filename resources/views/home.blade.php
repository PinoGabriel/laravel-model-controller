@extends('layouts.app')

@section('content')
<h1>Movie</h1>
    <div class="container d-flex flex-wrap"> 
            @foreach ($movies as $movie)
                <div class="card myCard">
                    <div class="card-body">
                    <h2 class="card-title">{{$movie->title}}</h2>
                    <h4 class="card-title">{{$movie->original_title}}</h4>
                    <p class="card-text">{{$movie->nationality}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                    <p class="card-text">{{$movie->vote}}</p>
                    </div>
                </div>
            @endforeach
    </div>

@endsection