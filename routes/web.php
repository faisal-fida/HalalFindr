<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Example:
Route::get('example', function () { 
    
    
    return view('example'); }) -> name('example');


// Main Pages:
Route::get('/', function () { return view('index'); }) -> name('/');

// Customer Pages:
Route::get('profile/{id}', [CustomerController::class, 'show'])->name('profile');

// Restaurant Pages:
Route::get('restaurants', [RestaurantController::class, 'index'])->name('restaurant');
Route::get('restaurant/{id}', [RestaurantController::class, 'show'])->name('restaurant.show');

// Food Pages:
Route::get('menu', [FoodController::class, 'index'])->name('menu');
Route::get('restaurant/{restaurant_id}/food/{food_id}', [FoodController::class, 'add_to_cart'])->name('food.cart');

// Order Pages:
Route::get('cart', [OrderController::class, 'cart'])->name('cart');
Route::get('clear-cart', [FoodController::class, 'clear_cart'])->name('clear-cart');
Route::get('checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('congrats', [OrderController::class, 'congrats'])->name('congrats');


// Admin Pages:
Route::get('admin', [AdminController::class, 'show'])->name('admin');

Route::get('admin/restaurant/create', [AdminController::class, 'create_restaurant'])->name('admin.restaurant.create');
Route::post('admin/restaurant/create', [AdminController::class, 'store_restaurant'])->name('admin.restaurant.store');
Route::get('admin/restaurant/{id}/edit', [AdminController::class, 'edit_restaurant'])->name('admin.restaurant.edit');
Route::put('admin/restaurant/{id}/edit', [AdminController::class, 'update_restaurant'])->name('admin.restaurant.update');
Route::delete('admin/restaurant/{id}/delete', [AdminController::class, 'destroy_restaurant'])->name('admin.restaurant.destroy');

Route::get('admin/food/create', [AdminController::class, 'create_food'])->name('admin.food.create');
Route::post('admin/food/create', [AdminController::class, 'store_food'])->name('admin.food.store');
Route::get('admin/food/{id}/edit', [AdminController::class, 'edit_food'])->name('admin.food.edit');
Route::put('admin/food/{id}/edit', [AdminController::class, 'update_food'])->name('admin.food.update');
Route::delete('admin/food/{id}/delete', [AdminController::class, 'destroy_food'])->name('admin.food.destroy');

Route::get('admin/order/create', [AdminController::class, 'create_order'])->name('admin.order.create');
Route::post('admin/order/create', [AdminController::class, 'store_order'])->name('admin.order.store');
Route::get('admin/order/{id}/edit', [AdminController::class, 'edit_order'])->name('admin.order.edit');
Route::put('admin/order/{id}/edit', [AdminController::class, 'update_order'])->name('admin.order.update');
Route::delete('admin/order/{id}/delete', [AdminController::class, 'destroy_order'])->name('admin.order.destroy');

Route::get('admin/customer/create', [AdminController::class, 'create_customer'])->name('admin.customer.create');
Route::post('admin/customer/create', [AdminController::class, 'store_customer'])->name('admin.customer.store');
Route::get('admin/customer/{id}/edit', [AdminController::class, 'edit_customer'])->name('admin.customer.edit');
Route::put('admin/customer/{id}/edit', [AdminController::class, 'update_customer'])->name('admin.customer.update');
Route::delete('admin/customer/{id}/delete', [AdminController::class, 'destroy_customer'])->name('admin.customer.destroy');

Route::get('admin/payment/create', [AdminController::class, 'create_payment'])->name('admin.payment.create');
Route::post('admin/payment/create', [AdminController::class, 'store_payment'])->name('admin.payment.store');
Route::get('admin/payment/{id}/edit', [AdminController::class, 'edit_payment'])->name('admin.payment.edit');
Route::put('admin/payment/{id}/edit', [AdminController::class, 'update_payment'])->name('admin.payment.update');
Route::delete('admin/payment/{id}/delete', [AdminController::class, 'destroy_payment'])->name('admin.payment.destroy');

Auth::routes();
Route::get('/home', [RestaurantController::class, 'index'])->name('home');