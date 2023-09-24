@extends('layouts.app')

@section('cart')
<li class="nav_item">
    <a href="{{ route('cart') }}" class="nav_link">
        <i class="fas fa-shopping-cart"></i>
        @if (isset($cartCount) && $cartCount !== false)
        <span class="cart_count">{{ $cartCount }}</span>
        @endif
    </a>
</li>
@endsection

@section('content')
<section class="menu section bd-container" id="menu">
    @if(Request::is('restaurant/*'))
    <h2 class="section-title">Menu of {{ $restaurant->name }}</h2>
    <p style="text-align: center;">{{ $restaurant->tagline }}</p>
    <p style="text-align: center;">Rating: {{ $restaurant->rating }}</p>
    @elseif(Request::is('restaurant/*/food/*'))
    @foreach ($cartItems as $cartItem)
    <p style="text-align: center;">{{ $cartItem['name'] }}</p>
    <p style="text-align: center;">{{ $cartItem['price'] }}</p>
    @endforeach
    <a href="{{ route('home') }}" class="section-subtitle">
        <span>Home</span>
        <i class="fas fa-angle-double-right fa-xs"></i>
        <span>Restaurant</span>
        <i class="fas fa-angle-double-right fa-xs"></i>
        <span>{{ $food->restaurant->name }}</span>
    </a>
    @else
    <h2 class="section-title">Menu of Halal Foods</h2>
    <a href="{{ route('home') }}" class="section-subtitle">
        <span>Home</span>
        <i class="fas fa-angle-double-right fa-xs"></i>
        <span>Menu</span>
    </a>
    @endif

    <div class="menu_container bd-grid">
        @foreach ($foods as $food)
        <div class="menu_content">
            <img src="{{ asset($food->image) }}" alt="" class="menu_img">
            <h3 class="menu_name">{{ $food->name }}</h3>
            <span class="menu_detail">{{ $food->description }}</span>
            <span class="menu_preci">{{ $food->price }}</span>

            @if(Request::is('restaurant/*'))
            <a href="{{ route('food.cart', ['restaurant_id' => $food->restaurant->id, 'food_id' => $food->id]) }}"
                class="button menu_button">
                <i class='bx bx-cart-alt'></i>
            </a>
            @else
            <a href="{{ route('food.cart', ['restaurant_id' => 1, 'food_id' => $food->id]) }}"
                class="button menu_button">
                <i class='bx bx-cart-alt'></i>
            </a>
            @endif
        </div>
        @endforeach
    </div>
</section>
@endsection