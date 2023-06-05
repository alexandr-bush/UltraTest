<!-- Добавьте список продуктов в корзине -->
@foreach ($products as $product)
    <div class="cart-item">
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p>
        <button wire:click="removeFromCart({{ $product->id }})">Remove</button>
    </div>
@endforeach

<!-- Добавьте поля из ресурса Orders и кнопку оформления заказа -->
<form wire:submit.prevent="placeOrder">
    <label for="client">Client:</label>
    <input type="text" id="client" wire:model="client">

    <!-- Добавьте остальные поля заказа -->

    <button type="submit">Оформить заказ</button>
</form>
