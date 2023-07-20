@extends('layouts.app')

@section('title', 'Welcome')


@section('main-content')
   
    <h1 class="text-center">
        Homepage
    </h1>
    <div class="container">
      <div class="row justify-content-center">
        
        @foreach ($movies as $movie)
            {{-- @dump($book) --}}
            <div class="card" style="width: 14rem;">
                <h4>{{$movie->title}}</h4>
                <div class="card-body">
                   <h5 class="card-title">{{$movie->original_title}}</h5>
                   <p class="card-text">{{$movie->nationality}}</p>
                   <p class="card-text">{{$movie->date}}</p>
                   <p class="card-text">{{$movie->vote}}</p>                  
                </div>
            </div>
           
        @endforeach
      </div>   
    </div>
@endsection

 

