<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('order.index', compact('cart'));
    }

    public function store()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return back()->with('error', 'Your cart is empty.');
        }

        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);

        Order::create([
            'user_id' => auth()->id(),
            'items' => json_encode($cart),
            'total' => $total,
        ]);

        session()->forget('cart');

        return redirect('/')->with('success', 'Order placed successfully!');
    }
}
