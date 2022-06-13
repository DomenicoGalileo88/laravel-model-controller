@extends('layout.app')

@section('content')

<div class="container py-5">
    <div class="row row-cols-5 g-3">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card text-center" style="width: 15rem;">

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