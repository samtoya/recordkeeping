<?php

namespace App\Http\Controllers;

use App\Imports\CarsImport;
use Exception;
use Illuminate\Http\Request;
use Excel;

class ImportController extends Controller
{
    public function index()
    {
        return view('import.index');
    }
    
    public function store(Request $request)
    {
        try {
            Excel::import(new CarsImport, $request->file('file'));
    
            return redirect()->route('import.index')->with('success', 'Data was imported successfully!');
        } catch ( Exception $e) {
            return $e->getMessage();
        }
    }
}
