<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BeverageDetail;

class BeverageDetailController extends Controller
{
    //
    public function index()
    {
        return view('beverage');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'beverage' => "required"
        ]);

        BeverageDetail::create($validatedData);
        
        return redirect('/beverage');
    }
}
