<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pizzas Menu') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($pizzas->isEmpty())
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <p class="text-gray-500">No pizzas available at the moment.</p>
                </div>
            @else
                <ul class="divide-y divide-stone-500 px-2">
                    @foreach($pizzas as $pizza)
    <li class="flex gap-4 py-2">
        <img 
            src="{{ $pizza['imageUrl'] }}" 
            alt="{{ $pizza['name'] }}" 
            class="h-24 {{ $pizza['soldOut'] ? 'opacity-70 grayscale' : '' }}"
        />
        <div class="flex grow flex-col pt-0.5">
            <p class="font-medium">{{ $pizza['name'] }}</p>
            <p class="text-sm capitalize italic text-stone-500">
                {{ implode(', ', $pizza['ingredients']) }}
            </p>
            <div class="mt-auto flex items-center justify-between">
                @if(!$pizza['soldOut'])
                    <p class="text-sm">${{ number_format($pizza['unitPrice'], 2) }}</p>
                @else
                    <p class="text-sm font-medium uppercase text-stone-500">
                        Sold out
                    </p>
                @endif

                @if(!$pizza['soldOut'])
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $pizza['id'] }}">
                        <input type="hidden" name="name" value="{{ $pizza['name'] }}">
                        <input type="hidden" name="price" value="{{ $pizza['unitPrice'] }}">
                        <button type="submit"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded text-sm">
                            Add to cart
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </li>
@endforeach

                </ul>
            @endif
        </div>
    </div>

    @push('scripts')
    <script>
        function addToCart(pizza) {
            fetch('/cart', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
    },
    body: JSON.stringify({
        pizzaId: pizza.id,
        pizzaName: pizza.name,
        pizzaPrice: pizza.unitPrice
    })
    })            .then(response => {
                if (!response.ok) throw new Error('Failed to add to cart');
                return response.json();
            })
            .then(data => {
                console.log("added to cart");
                alert(`${pizza.name} added to cart!`);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to add to cart');
            });
        }
    </script>
@endpush

</x-app-layout>