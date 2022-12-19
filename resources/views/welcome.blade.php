@extends('layouts.app')

@section('content')
<h1 class="text-center pt-5">Welcome</h1>

<div class="content">
    <div class="container my-5">
        <div class="row row-cols-4 g-3">
            @forelse($movies as $movie)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3>{{$movie->title}}</h3>
                        <p>{{$movie->original_title}}</p>
                        <p class="text-muted">{{$movie->nationality}}</p>
                        <p>{{$movie->date}}</p>
                        <h5>{{$movie->vote}}</h5>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p>
                    🙄 Sorry, no books in the labrary yet.
                </p>
            </div>
            @endforelse
        </div>
    </div>
</div>

@endsection