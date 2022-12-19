@extends('layouts.app')

@section('content')
<h1 class="text-center pt-5">The Movie Database!</h1>

<div class="content">
    <div class="container my-5">
        <div class="row row-cols-5 g-3">
            @forelse($movies as $movie)
            <div class="col">
                <div class="my-card">
                    <img src="{{$movie->cover}}" alt="">

                    <div class="back-card">
                        <h3>{{$movie->title}}</h3>
                        <p>{{$movie->original_title}}</p>
                        <p class="text-muted">{{$movie->nationality}}</p>
                        <p>{{$movie->date}}</p>
                    </div>

                    <div class="circle-vote">
                        <p class="m-0">
                            {{$movie->vote}}
                        </p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col"></div>
            @endforelse
        </div>
    </div>
</div>

@endsection