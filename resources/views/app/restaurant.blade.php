@extends('layouts.app')

@section('content')

<section class="menu section bd-container">
    <h2 class="section-title">Find your Restaurant</h2>
    <a href="{{ route('/') }}" class="section-subtitle">
        <span>Home</span>
        <i class="fas fa-angle-double-right fa-xs"></i>
        <span>Restaurants</span>
    </a>


    <div class="menu_container bd-grid">
        @foreach ($restaurants as $restaurant)
        <div class="menu_content">
            <img src="{{  asset($restaurant->image) }}" alt="" class="menu_img">
            <h3 class="menu_name">{{ $restaurant->name }}</h3>
            <span class="menu_detail">{{ $restaurant->tagline }}</span>
            <span class="menu_preci">{{ $restaurant->rating }}</span>
            <a href="restaurant/{{ $restaurant->id }}" class="button menu_button"><i class='bx bx-show'></i></a>
        </div>
        @endforeach
    </div>
</section>

@endsection