<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Food;
use App\Models\CustomerFood;
use App\Models\Customer;
use App\Models\User;
use App\Models\Payment;

class AdminController extends Controller
{

    public function show()
    {
        return view('admin.index', ['restaurants' => Restaurant::all(), 'orders' => CustomerFood::all(), 'foods' => Food::all(), 'customers' => Customer::all(), 'payments' => Payment::all()]);
    }

    public function create_restaurant()
    {
        return view('admin.restaurant.create');
    }

    public function store_restaurant(Request $request)
    {
        $restaurant = new Restaurant();
        $restaurant->name = $request->input('name');
        $restaurant->tagline = $request->input('tagline');
        $restaurant->rating = $request->input('rating');
        $restaurant->image = $request->input('image');
        $restaurant->address = $request->input('address');
        $restaurant->contact_number = $request->input('contact_number');
        $restaurant->save();
        return redirect()->route('admin');
    }

    public function edit_restaurant($id)
    {
        return view('admin.restaurant.edit', ['restaurant' => Restaurant::findOrFail($id)]);
    }

    public function update_restaurant(Request $request, $id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->name = $request->input('name');
        $restaurant->tagline = $request->input('tagline');
        $restaurant->rating = $request->input('rating');
        $restaurant->image = $request->input('image');
        $restaurant->address = $request->input('address');
        $restaurant->contact_number = $request->input('contact_number');
        $restaurant->save();
        return redirect()->route('admin');
    }

    public function destroy_restaurant($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();
        return redirect()->route('admin');
    }

    public function create_food()
    {
        return view('admin.food.create', ['restaurants' => Restaurant::all()]);
    }

    public function store_food(Request $request)
    {
        $food = new Food();
        $food->name = $request->input('name');
        $food->description = $request->input('description');
        $food->image = $request->input('image');
        $food->price = $request->input('price');
        $food->cuisine_type = $request->input('cuisine_type');
        $food->halal_certified = $request->input('halal_certified');
        $food->restaurant_id = $request->input('restaurant_id');
        $food->save();
        return redirect()->route('admin');
    }

    public function edit_food($id)
    {
        return view('admin.food.edit', ['food' => Food::findOrFail($id), 'restaurants' => Restaurant::all()]);
    }

    public function update_food(Request $request, $id)
    {
        $food = Food::findOrFail($id);
        $food->name = $request->input('name');
        $food->description = $request->input('description');
        $food->image = $request->input('image');
        $food->price = $request->input('price');
        $food->cuisine_type = $request->input('cuisine_type');
        $food->halal_certified = $request->input('halal_certified');
        $food->restaurant_id = $request->input('restaurant_id');
        $food->save();
        return redirect()->route('admin');
    }

    public function destroy_food($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();
        return redirect()->route('admin');
    }

    public function create_order()
    {
        return view('admin.order.create', ['orders' => CustomerFood::all()]);
    }

    public function store_order(Request $request)
    {
        $order = new CustomerFood();
        $order->food_id = $request->input('food_id');
        $order->customer_id = $request->input('customer_id');
        $order->order_status = $request->input('order_status');
        $order->delivery_address = $request->input('delivery_address');
        $order->contact_number = $request->input('contact_number');
        $order->quantity = $request->input('quantity');
        $order->total_price = $request->input('total_price');
        $order->order_date = $request->input('order_date');
        $order->save();
        return redirect()->route('admin');
    }

    public function edit_order($id)
    {
        return view('admin.order.edit', ['orders' => CustomerFood::findOrFail($id), 'orderss' => CustomerFood::all()]);
    }

    public function update_order(Request $request, $id)
    {
        $order = CustomerFood::findOrFail($id);
        $order->food_id = $request->input('food_id');
        $order->customer_id = $request->input('customer_id');
        $order->order_status = $request->input('order_status');
        $order->delivery_address = $request->input('delivery_address');
        $order->contact_number = $request->input('contact_number');
        $order->quantity = $request->input('quantity');
        $order->total_price = $request->input('total_price');
        $order->order_date = $request->input('order_date');
        $order->save();
        return redirect()->route('admin');
    }

    public function destroy_order($id)
    {
        $order = CustomerFood::findOrFail($id);
        $order->delete();
        return redirect()->route('admin');
    }

    public function create_customer()
    {
        return view('admin.customer.create');
    }

    public function store_customer(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('address');
        $user->save();
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->save();
        return redirect()->route('admin');
    }

    public function edit_customer($id)
    {
        return view('admin.customer.edit', ['customer' => Customer::findOrFail($id)]);
    }

    public function update_customer(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->save();
        return redirect()->route('admin');
    }

    public function destroy_customer($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('admin');
    }

    public function create_payment()
    {
        return view('admin.payment.create');
    }

    public function store_payment(Request $request)
    {
        $payment = new Payment();
        $payment->order_id = $request->input('order_id');
        $payment->payment_method = $request->input('payment_method');
        $payment->payment_status = $request->input('payment_status');
        $payment->save();
        return redirect()->route('admin');
    }

    public function edit_payment($id)
    {
        return view('admin.payment.edit', ['payment' => Payment::findOrFail($id)]);
    }

    public function update_payment(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->order_id = $request->input('order_id');
        $payment->payment_method = $request->input('payment_method');
        $payment->payment_status = $request->input('payment_status');
        $payment->save();
        return redirect()->route('admin');
    }

    public function destroy_payment($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return redirect()->route('admin');
    }

    
}