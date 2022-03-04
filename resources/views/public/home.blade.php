@extends('layouts.master')


@section('content')

<div id="carouselExampleDark" class="carousel  slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    @foreach ($homes as $home )
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $loop->iteration-1 }}" class="active" aria-current="true" aria-label="Slide {{ $loop->iteration }}"></button>
    @endforeach
  </div>

  <div class="carousel-inner">
  
    @foreach ($homes as $home )
      <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="10000">
        <img src="{{ $home->url.$home->nameImage }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-white">{{ $home->title }} </h5>
          <p class="text-white">{{ $home->description }}</p>
        </div>
      </div>
    @endforeach
 
  </div>

  <button class="carousel-control-prev text-white" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


@endsection|