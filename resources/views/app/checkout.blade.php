<!DOCTYPE html>
<html>

<head>
    <title>CART</title>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-cart.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>

<body>
    <div class="CartContainer">
        <div class="Header">
            <h3 class="Heading">Checkout</h3>
            <a href="" class="back">
                <h5 class="Action">Back to Menu <i class='bx bxs-food-menu'></i></h5>
            </a>
        </div>

        <div class="Cart-Items">

            <div class="image-box">
                <img src="{{  asset($food->image) }}" alt="" class="menu_img">
            </div>

            <div class="about">
                <h1 class="title">{{ $food->name }}</h1>
                <h3 class="subtitle">{{ $food->description }}</h3>
            </div>

            <div class="counter">
                <h3 class="quantity">Quantity </h3>
                <input type="number" min="1" max="10" value="1" name="quantity" class="quantity-round">
            </div>

        </div>

        @if(Request::is('restaurant/*/food/*'))
        <div class="checkout">
            <div class="total">
                <div class="Subtotal">Total</div>
                <div class="total-amount">Rs. {{ $food->price }}</div>
            </div>
            <form action="{{ route('congrats') }}" method="POST">
                <input id="ordered_item" name="ordered_item" type="hidden" value="Pizza">
                <input type="submit" value="Submit" class="button">
            </form>
        </div>
        @else
        <div class="checkout">
            <div class="total">
                <div class="Subtotal">Total</div>
                <div class="total-amount">Rs. {{ $food->price }}</div>
            </div>
            <form action="{{ route('cart') }}" method="POST">
                <input id="ordered_item" name="ordered_item" type="hidden" value="Pizza">
                <input type="submit" value="Submit" class="button">
            </form>
        </div>
        @endif
    </div>
</body>

</html>