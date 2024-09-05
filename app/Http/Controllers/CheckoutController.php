<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function show()
    {
        return view('chekout');
    }
    public function store(Request $request)
    {
        $validated = $request->validated([
            'name' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
            'payment_type' => 'required|string',
            'total_amount' => 'required|string',
        ]);

        Order::create($validated);

        return redirect('chekout/information');
    }
    public function confirmation()
       
        {
            return view('chekout-confirm');
        }
    }

