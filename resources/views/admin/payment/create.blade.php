@extends('layouts.app')
@section('content')

<div class="container">
    <div class="forms-container">
        <form method="POST" action="{{ route('admin.customer.store') }}" class="sign-in-form">
            @csrf
            <h2 class="title">Create Customer</h2>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="name" placeholder="Name" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="address" placeholder="Address" />
            </div>
            <input type="submit" value="Create" class="btn solid" />
        </form>
    </div>
</div>