<div>
    <h1>Shopping Cart</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Brand</th>
                <th>Quantity</th>
                <th>Active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100"></td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->active ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
