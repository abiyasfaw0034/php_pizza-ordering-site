<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Show only orders that are 'pending' for the logged-in user
        $orders = Order::where('user_id', auth()->id())
            ->where('status', 'pending')
            ->latest()
            ->get();

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

    public function cancel($id)
    {
        $order = Order::where('user_id', auth()->id())->findOrFail($id);

        // Only allow canceling if the order is still pending
        if ($order->status === 'pending') {
            $order->status = 'cancelled';
            $order->save();
            return redirect()->route('order.index')->with('success', 'Order cancelled successfully!');
        }

        return redirect()->route('order.index')->with('error', 'You cannot cancel this order.');
    }

    public function cancelledOrders()
    {
        $cancelledOrders = auth()->user()->orders()->where('status', 'cancelled')->get();

        return view('order.cancelled', compact('cancelledOrders'));
    }
}
