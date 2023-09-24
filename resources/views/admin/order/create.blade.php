@extends('layouts.app')
@section('content')

<div class="container">
    <div class="forms-container">
        <form method="POST" action="{{ route('admin.order.store') }}" class="sign-in-form">
            @csrf
            <h2 class="title">Create Order</h2>
            <select name="food_id" class="select-field">
                <option selected>Select Food</option>
                @foreach($orders->unique('food_id') as $order)
                <option value="{{ $order->food->id }}">{{ $order->food->name }}</option>
                @endforeach
            </select>
            <select name="customer_id" class="select-field">
                <option selected>Select Customer</option>
                @foreach($orders->unique('customer_id') as $order)
                <option value="{{ $order->customer->id }}">{{ $order->customer->name }}</option>
                @endforeach
            </select>
            <select name="order_status" class="select-field">
                <option selected>Select Order Status</option>
                <option value="status_pending">Pending</option>
                <option value="status_accepted">Accepted</option>
                <option value="status_rejected">Rejected</option>
            </select>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="delivery_address" placeholder="Delivery Address" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="integer" name="contact_number" placeholder="Contact Number" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="integer" name="quantity" placeholder="Quantity" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="integer" name="total_price" placeholder="Total Price" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="date" name="order_date" placeholder="Order Date" />
            </div>
            <input type="submit" value="Create" class="btn solid" />
        </form>
    </div>
</div>