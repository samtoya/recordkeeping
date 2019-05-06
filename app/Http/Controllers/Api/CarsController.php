<?php

namespace App\Http\Controllers\Api;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{
    public function index()
    {
        return response()->json(Car::all());
    }
    
    public function show(Car $car)
    {
        return response()->json($car);
    }
}
