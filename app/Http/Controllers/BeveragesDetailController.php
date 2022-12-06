<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BeveragesDetail;

class BeveragesDetailController extends Controller
{
    //
    public function index()
    {
        return view('beverages');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'beverages' => "required"
        ]);

        BeveragesDetail::create($validatedData);
        
        return redirect('/beverages');
    }
}
