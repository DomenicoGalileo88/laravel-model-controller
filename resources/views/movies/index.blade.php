@extends('layout.app')

@section('content')

<h1>Movies:</h1>

<div class="container">
    <div class="row">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h4 class="card-title">Title: {{$movie->title}}</h5>
                        <p class="card-text">Nationality: {{$movie->nationality}}</p>
                        <p class="card-text">Date: {{$movie->date}}</p>
                        <small class="card-text">Vote: {{$movie->vote}}</small>
                </div>
            </div>
        </div>

        @empty

        <p>
            No Movies!!
        </p>
        @endforelse
    </div>
</div>


@endsection