@extends('layouts.app')

@section("header")

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
@endsection

@section('content')

<section class="menu section bd-container" id="menu" style="text-align: center;">
    <h1 class="section-title">Available Restaurants</h1>
    <button class="btn" onclick="window.location.href = `{{ route('admin.restaurant.create') }}`;">Create</button>
</section>

<table id="data-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Tagline</th>
            <th>Rating</th>
            <th>Image</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($restaurants as $restaurant)
        <tr>
            <td>{{ $restaurant->id }}</td>
            <td>{{ $restaurant->name }}</td>
            <td>{{ $restaurant->tagline }}</td>
            <td>{{ $restaurant->rating }}</td>
            <td>{{ $restaurant->image }}</td>
            <td>{{ $restaurant->address }}</td>
            <td>{{ $restaurant->contact_number }}</td>
            <td>
                <button class="btn"
                    onclick="window.location.href = `{{ route('admin.restaurant.edit', ['id' => $restaurant->id]) }}`;">Edit</button>
                <form style="display:inline-block" method="POST"
                    action="{{ route('admin.restaurant.destroy', ['id' => $restaurant->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



<section class="menu section bd-container" id="menu" style="text-align: center;">
    <h1 class="section-title"> Available Foods </h1>
    <button onclick="window.location.href = `{{ route('admin.food.create') }}`;" class="btn">Create</button>
</section>

<table id="data-table1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
            <th>Cuisine Type</th>
            <th>Halal Certified</th>
            <th>Restaurant</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($foods as $food)
        <tr>
            <td>{{ $food->id }}</td>
            <td>{{ $food->name }}</td>
            <td>{{ $food->description }}</td>
            <td>{{ $food->image }}</td>
            <td>{{ $food->price }}</td>
            <td>{{ $food->cuisine_type }}</td>
            <td>{{ $food->halal_certified }}</td>
            <td>{{ $food->restaurant->name }}</td>
            <td>
                <button class="btn"
                    onclick="window.location.href = `{{ route('admin.food.edit', ['id' => $food->id]) }}`;">Edit</button>
                <form style="display:inline-block" method="POST"
                    action="{{ route('admin.food.destroy', ['id' => $food->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<section class="menu section bd-container" id="menu" style="text-align: center;">
    <h1 class="section-title"> Available Customers </h1>
    <button class="btn" onclick="window.location.href = `{{ route('admin.customer.create') }}`;">Create</button>
</section>

<table id="data-table2">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->address }}</td>
            <td>
                <button class="btn"
                    onclick="window.location.href = `{{ route('admin.customer.edit', ['id' => $customer->id]) }}`;">Edit</button>
                <form style="display:inline-block" method="POST"
                    action="{{ route('admin.customer.destroy', ['id' => $customer->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<section class="menu section bd-container" id="menu" style="text-align: center;">
    <h1 class="section-title"> Available Orders </h1>
    <button class="btn" onclick="window.location.href = `{{ route('admin.order.create') }}`;">Create</button>
</section>

<table id="data-table3">
    <thead>
        <tr>
            <th>Id</th>
            <th>Food Name</th>
            <th>Customer Name</th>
            <th>Restaurant Name</th>
            <th>Payment Method</th>
            <th>Order Status</th>
            <th>Delivery Address</th>
            <th>Contact Number</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Order Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->food->name }}</td>
            <td>{{ $order->customer->name }}</td>
            <td>{{ $order->food->restaurant->name }}</td>
            <td>{{ $order->customer->payment->first()->payment_method }}</td>
            <td>{{ $order->order_status }}</td>
            <td>{{ $order->delivery_address }}</td>
            <td>{{ $order->contact_number }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->total_price }}</td>
            <td>{{ $order->order_date }}</td>
            <td>
                <button class="btn"
                    onclick="window.location.href = `{{ route('admin.order.edit', ['id' => $order->id]) }}`;">Edit</button>
                <form style="display:inline-block" method="POST"
                    action="{{ route('admin.order.destroy', ['id' => $order->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<section class="menu section bd-container" id="menu" style="text-align: center;">
    <h1 class="section-title"> Available Payments </h1>
    <button class="btn" onclick="window.location.href = `{{ route('admin.payment.create') }}`;">Create</button>
</section>

<table id="data-table4">
    <thead>
        <tr>
            <th>Id</th>
            <th>Order Id</th>
            <th>Payment Method</th>
            <th>Payment Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($payments as $payment)
        <tr>
            <td>{{ $payment->id }}</td>
            <td>{{ $payment->order_id }}</td>
            <td>{{ $payment->payment_method }}</td>
            <td>{{ $payment->payment_status }}</td>
            <td>
                <button class="btn"
                    onclick="window.location.href = `{{ route('admin.payment.edit', ['id' => $payment->id]) }}`;">Edit</button>
                <form style="display:inline-block" method="POST"
                    action="{{ route('admin.payment.destroy', ['id' => $payment->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection