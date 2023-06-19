@extends('master')

@section("content")

<div class="custom-product">
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>
      
      <!-- The slideshow/carousel -->
       <div class="carousel-inner">
          @foreach ($products as $item)
          <div class="carousel-item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
                <img class="slider-img" src="{{$item['gallery']}}">
                <div class="carousel-caption slider-text">
                  <h3>{{$item['name']}}</h3>
                  <p>{{$item['description']}}</p>
                </div>
             </a>
          </div>
    
          @endforeach
        </div>
      
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-primary"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-primary"></span>
      </button>
    </div>

    <h3 class="trend-title">Trending Products</h3>
    '
    <div class="trending-wrapper">
        
        @foreach($products as $item)
        <div class="trening-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}">
          <div class="trend-prod-name">
            <h3>{{$item['name']}}</h3>
          </div>
        </a>
        </div>
        @endforeach
      </div>'
  </div>

@endsection
