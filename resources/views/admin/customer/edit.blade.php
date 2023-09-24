@extends('layouts.app')
@section('content')

<div class="container">
    <div class="forms-container">
        <form method="POST" action="{{ route('admin.customer.update', ['id' => $customer->id]) }}" class="sign-in-form">
            @csrf
            @method('PUT')
            <h2 class="title">Edit Customer</h2>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="name" value="{{ $customer->name }}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="email" value="{{ $customer->email }}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="address" value="{{ $customer->address }}" />
            </div>
            <input type="submit" value="Update" class="btn solid" />
        </form>
    </div>