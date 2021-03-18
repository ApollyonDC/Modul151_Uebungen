<html>
    <head>
        <title>Warenkorb</title>
    </head>

    <body>
        <table>
        <tr>
            <th>Name</th>
            <th>Preis</th>
        </tr>
        @foreach ($itemsInCart as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td><img src="{{ $product->image }}" alt="{{ $product->name }}"></td>
            </tr>
        @endforeach
    </table>
    </body>
</html>