<?php

namespace App\Http\Controllers\Api;

use App\{Car, Customer};
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller
{
    public function index($query)
    {
        $results = collect();
        
        $results['cars'] = Car::search("{$query}*")->get();
        $results['customers'] = Customer::search("{$query}*")->get();
        
        return response()->json($results, Response::HTTP_OK );
    }
}
