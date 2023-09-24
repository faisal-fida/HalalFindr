<!DOCTYPE html>
<html>

<head>
    <title>CART</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-cart.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>

<body>
    <div class="CartContainer">
        <div class="Header">
            <h3 class="Heading">Cart</h3>
            <a class="Action" href="{{ route('clear-cart') }}" class="clear-cart">Clear Cart </a>
        </div>

        @if ($cartItems)

        {{$totalPrice = 0;}}
        @foreach ($cartItems as $item)
        {{$itemPrice = $item['price'] * $item['Quantity']}}
        {{ $totalPrice += $itemPrice }}
        <div class="Cart-Items">
            <div class="image-box">
                <img src="{{  asset($item['image']) }}" alt="" class="menu_img">
            </div>
            <div class="about">
                <h1 class="title">{{ $item['name'] }}</h1>
                <h3 class="subtitle">{{ $item['description'] }}</h3>
            </div>
            <div class="counter">
                <h3 class="quantity">Quantity</h3>
                <input type="number" min="1" max="10" value="{{ $item['Quantity'] }}" name="quantity-{{$item['id']}}"
                    class="quantity-round" onchange="updatePrice(this, {{ $item['price'] }})">
            </div>
        </div>
        @endforeach
        <div class="checkout">
            <div class="total">
                <div class="Subtotal">Total</div>
                <div class="total-amount" id="total-amount">Rs. {{ $totalPrice }}</div>
            </div>

            <form action="{{ route('congrats') }}" method="POST">
                @csrf
                <input type="hidden" name="food_id" value="{{ $item['id'] }}">
                <input type="hidden" name="quantity" value="{{ $item['Quantity'] }}">
                <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                <input id="ordered_item" name="ordered_item" type="hidden" value="Pizza">
                <input type="submit" value="Submit" class="button">
            </form>
        </div>
        @else
        <div class="Cart-Items">
            <div class="image-box">
                <img src="{{ asset('images/empty-cart.png') }}" alt="" class="menu_img">
            </div>
            <div class="about">
                <h1 class="title">Cart Empty</h1>
                <h3 class="subtitle">Add items to it now.</h3>
            </div>
        </div>
        @endif
    </div>
</body>

<script>
function updatePrice(input, price) {
    const quantity = input.value;
    const itemPrice = (quantity * price).toFixed(2);
    const totalAmountElement = document.getElementById('total-amount');
    totalAmountElement.innerText = 'Rs. ' + itemPrice;
}
</script>

</html>