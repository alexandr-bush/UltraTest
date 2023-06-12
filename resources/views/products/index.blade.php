<livewire:cart-indicator :cartCount="$cartCount" />
@foreach ($products as $product)
    <div class="product-card">
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p>
        <livewire:add-to-cart :product="$product" />
    </div>
@endforeach