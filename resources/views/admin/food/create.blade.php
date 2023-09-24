@extends('layouts.app')
@section('content')

<div class="container">
    <div class="forms-container">
        <form method="POST" action="{{ route('admin.food.store') }}" class="sign-in-form">
            @csrf
            <h2 class="title">Create Food</h2>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="name" placeholder="Name" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="description" placeholder="Description" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" name="image" placeholder="Image" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="integer" name="price" placeholder="Price" />
            </div>
            <select name="cuisine_type" class="select-field">
                <option value="cuisine_chinese">Chinese</option>
                <option value="cuisine_indian">Indian</option>
                <option value="cuisine_western">Western</option>
                <option value="cuisine_italian">Italian</option>
                <option value="cuisine_japanese">Japanese</option>
                <option value="cuisine_korean">Korean</option>
                <option value="cuisine_malay">Malay</option>
                <option value="cuisine_thai">Thai</option>
                <option value="cuisine_vietnamese">Vietnamese</option>
            </select>
            <select name="halal_certified" class="select-field">
                <option value="halal_certified_yes">Yes</option>
                <option value="halal_certified_no">No</option>
            </select>
            <select name="restaurant_id" class="select-field">
                @foreach($restaurants as $restaurant)
                <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                @endforeach
            </select>
            <input type="submit" value="Create" class="btn solid" />
        </form>
    </div>
</div>