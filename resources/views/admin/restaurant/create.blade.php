@extends('layouts.app')
@section('content')

<div class="container">
    <div class="forms-container">
        <form method="POST" action="{{ route('admin.restaurant.store') }}" class="sign-in-form">
            @csrf
            <h2 class="title">Create Restaurant</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Name" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="tagline" placeholder="Tagline" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="rating" placeholder="Rating" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="image" placeholder="Image" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="address" placeholder="Address" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="contact_number" placeholder="Contact Number" />
            </div>
            <input type="submit" value="Create" class="btn solid" />
        </form>
    </div>
</div>

@endsection