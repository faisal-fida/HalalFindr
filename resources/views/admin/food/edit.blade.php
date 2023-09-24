@extends('layouts.app')
@section('content')

<div class="container">
    <div class="forms-container">
        <form method="POST" action="{{ route('admin.food.update', ['id' => $food->id]) }}" class="sign-in-form">
            @csrf
            @method('PUT')
            <h2 class="title">Edit Food</h2>
            <label for="name">Name</label>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="name" value="{{ $food->name }}" />
            </div>
            <label for="description">Description</label>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="description" value="{{ $food->description }}" />
            </div>
            <label for="image">Image</label>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="image" value="{{ $food->image }}" />
            </div>
            <label for="price">Price</label>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="integer" name="price" value="{{ $food->price }}" />
            </div>
            <label for="cuisine_type">Cuisine Type</label>
            <select name="cuisine_type" class="select-field">
                <option value="cuisine_chinese" {{ $food->cuisine_type === 0 ? 'selected' : '' }}>Chinese</option>
                <option value="cuisine_indian" {{ $food->cuisine_type === 1 ? 'selected' : '' }}>Indian</option>
                <option value="cuisine_western" {{ $food->cuisine_type === 2 ? 'selected' : '' }}>Western</option>
                <option value="cuisine_italian" {{ $food->cuisine_type === 3 ? 'selected' : '' }}>Italian</option>
                <option value="cuisine_japanese" {{ $food->cuisine_type === 4 ? 'selected' : '' }}>Japanese</option>
                <option value="cuisine_korean" {{ $food->cuisine_type === 5 ? 'selected' : '' }}>Korean</option>
                <option value="cuisine_malay" {{ $food->cuisine_type === 6 ? 'selected' : '' }}>Malay</option>
                <option value="cuisine_thai" {{ $food->cuisine_type === 7 ? 'selected' : '' }}>Thai</option>
                <option value="cuisine_vietnamese" {{ $food->cuisine_type === 8 ? 'selected' : '' }}>Vietnamese</option>
            </select>
            <label for="halal_certified">Halal Certified?</label>
            <select name="halal_certified" class="select-field">
                <option value="halal_certified_yes" {{ $food->halal_certified === 0 ? 'selected' : '' }}>Yes</option>
                <option value="halal_certified_no" {{ $food->halal_certified === 1 ? 'selected' : '' }}>No</option>
            </select>
            <label for="restaurant_id">Restaurant</label>
            <select name="restaurant_id" class="select-field">
                @foreach($restaurants as $restaurant)
                <option value="{{ $restaurant->id }}" {{ $food->restaurant_id === $restaurant->id ? 'selected' : '' }}>
                    {{ $restaurant->name }}</option>
                @endforeach
            </select>
            <input type="submit" value="Update" class="btn solid" />
        </form>
    </div>
</div>