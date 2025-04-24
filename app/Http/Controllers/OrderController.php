<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', auth()->id())->latest()->get();
        return view('order.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $total = collect($cart)->reduce(function ($sum, $item) {
            return $sum + ($item['price'] * $item['quantity']);
        }, 0);

        Order::create([
            'user_id' => auth()->id(),
            'items' => $cart,
            'total' => $total,
            'status' => 'pending',
        ]);

        session()->forget('cart');

        return redirect()->route('order.index')->with('success', 'Order placed successfully!');
    }
}
