@extends('layouts.app')
@section('content')

<body>
    <div class="container">
        <div class="forms-container">
            <form method="POST" action="{{ route('admin.restaurant.update', ['id' => $restaurant->id]) }}"
                class="sign-in-form">
                @csrf
                @method('PUT')
                <h2 class="title">Edit Restaurant</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" value="{{ $restaurant->name }}" placeholder="Name" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="text" name="tagline" value="{{ $restaurant->tagline }}" placeholder="Tagline" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="text" name="rating" value="{{ $restaurant->rating }}" placeholder="Rating" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="text" name="image" value="{{ $restaurant->image }}" placeholder="Image" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="text" name="address" value="{{ $restaurant->address }}" placeholder="Address" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="text" name="contact_number" value="{{ $restaurant->contact_number }}"
                        placeholder="Contact Number" />
                </div>
                <input type="submit" value="Update" class="btn solid" />
            </form>
        </div>
    </div>
</body>

@endsection