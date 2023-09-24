@extends('layouts.app')
@section('content')

<div class="container">
    <div class="forms-container">
        <form method="POST" action="{{ route('admin.order.update', ['id' => $orders->id]) }}" class="sign-in-form">
            @csrf
            @method('PUT')
            <h2 class="title">Edit Order</h2>
            <select name="food_id" class="select-field">
                @foreach($orderss->unique('food_id') as $order)
                <option value="{{ $order->food->id }}" {{ $order->food->id === $orders->food->id ? 'selected' : '' }}>
                    {{ $order->food->name }}
                </option>
                @endforeach
            </select>
            <select name="customer_id" class="select-field">
                @foreach($orderss->unique('customer_id') as $order)
                <option value="{{ $order->customer->id }}"
                    {{ $order->customer->id === $orders->customer->id ? 'selected' : '' }}>
                    {{ $order->customer->name }}
                </option>
                @endforeach
            </select>
            <select name="order_status" class="select-field">
                <option value="status_pending" {{ $orders->order_status === 0 ? 'selected' : '' }}>Pending</option>
                <option value="status_accepted" {{ $orders->order_status === 1 ? 'selected' : '' }}>Accepted</option>
                <option value="status_rejected" {{ $orders->order_status === 2 ? 'selected' : '' }}>Rejected</option>
            </select>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="delivery_address" value="{{ $orders->delivery_address }}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="integer" name="contact_number" value="{{ $orders->contact_number }}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="integer" name="quantity" value="{{ $orders->quantity }}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="integer" name="total_price" value="{{ $orders->total_price }}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="date" name="order_date" value="{{ $orders->order_date }}" />
            </div>
            <input type="submit" value="Update" class="btn solid" />
        </form>
    </div>
</div>