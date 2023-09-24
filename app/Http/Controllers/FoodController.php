<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Customer;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        $customer = Customer::find(Auth::id());
        return view('app.menu', compact('foods', 'customer'));
    }
    
    public function add_to_cart($food_id, $restaurant_id)
    {
        $food = Food::find($food_id);
        $restaurant = Restaurant::find($restaurant_id);
    
        if (!$food || !$restaurant) {
            return back()->with('error', 'Food or restaurant not found.');
        }
    
        $user = Auth::user();
        $cartItems = json_decode($user->cartItems, true) ?? [];
        $cartItems[$food_id] = [
            'id' => $food_id,
            'name' => $food->name,
            'price' => $food->price,
            'image' => $food->image,
            'Quantity' => 1,
            'description' => $food->description,
        ];
    
        $user->cartItems = json_encode($cartItems);
        $user->save();
    
        $cartCount = count($cartItems);
    
        return redirect()->back()->with(compact('food', 'cartCount', 'cartItems', 'restaurant'));
    }

    public function clear_cart()
    {
        $user = Auth::user();
        $user->cartItems = null;
        $user->save();
        return redirect()->back();
    }

}