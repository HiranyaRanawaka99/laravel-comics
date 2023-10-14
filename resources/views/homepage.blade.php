
@extends('layouts.app')

@section ('page-title', 'Comics DC')




<!-- MAIN -->
@section('main')

<div class="comics-container">
  <div class="content">
      @foreach ($comics_list as $comic)
      <div class="card-img" >
          <img src="{{$comic['thumb']}}" alt="comic">
          <div class="card-title">
              <h4>{{ $comic['series'] }}</h4>
          </div>
      </div>
      @endforeach
  </div>
  <div class="div-btn">
      <button class="load-btn">
          LOAD MORE
      </button>
  </div>
</div>


@endsection

