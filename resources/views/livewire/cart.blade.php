@foreach ($cartItems as $item)
    <div class="cart-item">
        <h3>{{ $item->name }}</h3>
        <p>Brand: {{ $item->brand }}</p>
        <img src="{{ asset('storage/' . $item->image) }}" alt="Product Image">
        <p>{{ $item->description }}</p>
        <p>Price: {{ $item->price }}</p>
    </div>
@endforeach