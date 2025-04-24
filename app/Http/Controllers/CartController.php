<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', ['cart' => $cart]);
    }

    public function store(Request $request)
    {
        $pizzaId = $request->input('id');
        $pizzaName = $request->input('name');
        $pizzaPrice = $request->input('price');

        $cart = session()->get('cart', []);

        if (isset($cart[$pizzaId])) {
            $cart[$pizzaId]['quantity']++;
        } else {
            $cart[$pizzaId] = [
                'name' => $pizzaName,
                'price' => $pizzaPrice,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', "$pizzaName added to cart!");
    }
    
}
