<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('app.restaurant', compact('restaurants'));
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        $foods = $restaurant->foods;
        $user = Auth::user();
        $cartItems = json_decode($user->cartItems, true) ?? [];
        $cartCount = count($cartItems);
        return view('app.menu', with(['restaurant' => $restaurant, 'foods' => $foods, 'cartCount' => $cartCount]));
    }
    
    
}