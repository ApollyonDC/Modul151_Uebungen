<html>
    <head>
        <title>Warenkorb</title>
    </head>

    <body>
        <table>
        <tr>
            <th>Name</th>
            <th>Preis</th>
            <th>Amount</th>
        </tr>
        @foreach ($itemsInCart as $product)
            <tr>
                <td>{{$product['name']}}</td>
                <td>{{$product['price']}}</td>
                <td>{{$product['count']}}</td>
                <td><img src="{{ $product->image }}" alt="{{ $product->name }}"></td>
            </tr>
        @endforeach
    </table>
    <a class="btn-area" href="/orderInfo">Weiter</a>
    <a href="/products">Zurück</a>
    </body>
</html>