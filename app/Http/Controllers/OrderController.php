<?php

namespace App\Http\Controllers;

use App\Models\CustomerFood;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    
    public function cart()
    {
        $user = Auth::user();
        $cartItems = json_decode($user->cartItems, true) ?? [];
        return view('app.cart', compact('cartItems'));
    }


    public function congrats(Request $request)
    {
        $user = Auth::user();
        $food = Food::find($request->food_id);
        $cartItems = json_decode($user->cartItems, true) ?? [];
        $order = new CustomerFood();
        $order->customer_id = $user->id;
        $order->food_id = $request->food_id;
        $order->order_status = 'confirmed';
        $order->delivery_address = 'Kathmandu';
        $order->contact_number = '9841234567';
        $order->quantity = $request->quantity;
        $order->total_price = $request->total_price;
        $order->order_date = date('Y-m-d');
        $order->save();
        return view('app.congrats', compact('cartItems','food'));
    }
    
}