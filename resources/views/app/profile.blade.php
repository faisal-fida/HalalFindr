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
    <h1 class="section-title">Profile</h1>
</section>

<table id="data-table">
    <thead id="table-header">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
        </tr>
    </tbody>
</table>

<section class="menu section bd-container" id="menu" style="text-align: center;">
    <h1 class="section-title">Orders</h1>
</section>

<table id="data-table1">
    <thead id="table-header">
        <tr>
            <th>Food Name</th>
            <th>Quantity</th>
            <th>Item Price</th>
            <th>Order Status</th>
            <th>Order Date</th>
            <th>Total Price</th>
        </tr>
    </thead>
    <tbody>
        @if (is_null($orders) == false)
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->food->name }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->food->price }}</td>
            <td>{{ $order->order_status }}</td>
            <td>{{ $order->order_date }}</td>
            <td>{{ $order->total_price }}</td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="4" style="text-align:center;">No orders found</td>
        </tr>
        @endif
    </tbody>
</table>

@endsection