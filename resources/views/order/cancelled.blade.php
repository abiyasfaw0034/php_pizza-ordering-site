<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cancelled Orders') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto space-y-6">
        @forelse($cancelledOrders as $order)
            <div class="bg-white shadow rounded p-4">
                <h3 class="font-bold">Order #{{ $order->id }}</h3>
                <p>Status: <span class="capitalize text-red-500">{{ $order->status }}</span></p>
                <p>Total: ${{ number_format($order->total, 2) }}</p>
                <p class="mt-2 font-semibold">Items:</p>
                <ul class="text-sm list-disc ml-5 text-gray-700">
                    @foreach($order->items as $item)
                        <li>{{ $item['quantity'] }} x {{ $item['name'] }} - ${{ number_format($item['price'], 2) }}</li>
                    @endforeach
                </ul>
                <p class="text-xs text-gray-500 mt-2">Placed at: {{ $order->created_at->format('F j, Y g:i A') }}</p>
            </div>
        @empty
            <p class="text-gray-500 text-center">No cancelled orders yet.</p>
        @endforelse
    </div>
</x-app-layout>
