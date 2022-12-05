<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\OrderDetail;

class OrderDetailController extends Controller
{
    //
    public function index()
    {
        return view('sandwich_detail');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bread' => "required",
            'size' => 'required',
            'extras' => 'required',
            'veggies' => 'required',
            'sauces' => 'required',
            
        ]);

        OrderDetail::create($validatedData);
        
        return redirect('/sandwich');
    }
}
