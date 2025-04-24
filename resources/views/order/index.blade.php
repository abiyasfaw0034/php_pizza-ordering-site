<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Orders') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto space-y-6">
        @if($orders->isEmpty())
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4">
                <p class="font-semibold">No orders found.</p>
                <p>You haven't placed any orders yet.</p>
            </div>
        @else
            @foreach($orders as $order)
                <div class="bg-white shadow rounded p-4">
                    <h3 class="font-bold">Order #{{ $order->id }}</h3>
                    <p>Status: <span class="capitalize">{{ $order->status }}</span></p>
                    <p>Total: ${{ number_format($order->total, 2) }}</p>
                    <p class="mt-2 font-semibold">Items:</p>
                    <ul class="text-sm list-disc ml-5 text-gray-700">
                        @foreach($order->items as $item)
                            <li>{{ $item['quantity'] }} x {{ $item['name'] }} - ${{ number_format($item['price'], 2) }}</li>
                        @endforeach
                    </ul>
                    <p class="text-xs text-gray-500 mt-2">Placed at: {{ $order->created_at->format('F j, Y g:i A') }}</p>

                    @if($order->status === 'pending')
                        <form action="{{ route('order.cancel', $order->id) }}" method="POST" class="mt-4">
                            @csrf
                            @method('POST')
                            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">
                                Cancel Order
                            </button>
                        </form>
                    @endif
                </div>
            @endforeach
        @endif
    </div>
</x-app-layout>
