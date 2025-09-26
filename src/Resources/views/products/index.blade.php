<!DOCTYPE html>
<html>
<head>
    <title>Product Inventory</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold">Product Inventory</h1>

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top:20px; width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>SKU</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Logs</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('inventory.product.logs', $product->id) }}">View Logs</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
