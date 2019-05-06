<?php

namespace App\Http\Controllers\Api;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function index()
    {
        return response()->json(Customer::all());
    }
    
    public function show(Customer $customer)
    {
        return response()->json($customer);
    }
}
