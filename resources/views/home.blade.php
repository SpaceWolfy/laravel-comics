@extends('layouts.layout')

{{-- @dump($array) --}}

@section('pageTitle', 'Home')


@section('content')

<div class="jumbo">
  <div class="teen-t-jumbo" style="background-image: url({{asset('img/jumbotron.jpg')}})"></div>
</div>

<div class="black-bar">
  <div class="container">
    <div class="ad-series btn-main-s">CURRENT SERIES</div>
    @foreach ($array as $comic)
      <div class="comic-card btn-main-s">
          <div class="card-img">
            <img src="{{$comic['thumb']}}" alt="">
          </div>
        
        <div class="title">{{$comic['series']}}</div>
      </div>
    @endforeach

    <div class="load btn-main-s">LOAD MORE</div>
  </div>
</div>
@endsection