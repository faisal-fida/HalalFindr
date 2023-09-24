<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CustomerController extends Controller
{
    public function show($id)
    {
        $customer = Customer::find(Auth::id());
        $orders = CustomerFood::where('customer_id', $id)->get();
        return view('app.profile', compact('customer', 'orders'));
    }

}