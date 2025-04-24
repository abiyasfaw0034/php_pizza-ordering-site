<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Cart') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white shadow-sm rounded-lg p-6">
            @if(session('success'))
                <div class="mb-4 text-green-600">
                    {{ session('success') }}
                </div>
            @endif

            @if(empty($cart))
                <p class="text-gray-500">Your cart is empty.</p>
            @else
                <ul class="divide-y divide-gray-200">
                    @foreach($cart as $id => $item)
                        <li class="py-3 flex justify-between">
                            <div>
                                <p class="font-semibold">{{ $item['name'] }}</p>
                                <p class="text-sm text-gray-500">
                                    ${{ number_format($item['price'], 2) }} x {{ $item['quantity'] }}
                                </p>
                            </div>
                            <p class="text-sm font-semibold">
                                ${{ number_format($item['price'] * $item['quantity'], 2) }}
                            </p>
                        </li>
                    @endforeach
                </ul>

                <div class="text-right mt-4 font-bold text-lg">
                    Total: $
                    {{
                        number_format(collect($cart)->reduce(function ($carry, $item) {
                            return $carry + ($item['price'] * $item['quantity']);
                        }, 0), 2)
                    }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
