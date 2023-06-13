@livewireScripts
@livewire('shopping-cart')
@livewire('product')
<a href="{{route('cart')}}">Bucket</a>

<div style="display: flex"> 

    @foreach ($products as $product)

    <div class="product-card bg-white rounded-lg shadow-lg p-6 ml-10">
        <h3 class="text-xl font-semibold">{{ $product->name }}</h3>
        <p class="text-sm">Brand: {{ $product->brand }}</p>
        <img class="mt-4 max-w-xs sm:max-w-md object-contain" src="{{ asset('storage/' . $product->image) }}" alt="Product Image">
        <p class="mt-4">{{ $product->description }}</p>
        <p class="mt-2">Price: {{ $product->price }}</p>

        <button wire:click="addToCart({{ $product->id }})">Add to Cart</button>

    </div>
    @endforeach
</div>
