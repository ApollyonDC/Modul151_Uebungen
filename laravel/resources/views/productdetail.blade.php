<html>
    <body>
        <h1>Warenkorb</h1>    
        <table>
            <tr>
                <th>Name</th>
                <th>Preis</th>
                <th>Foto</th>
                <th>Details</th>
            </tr>
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td><img src="{{ $product->image }}" alt="{{ $product->name }}"></td>
                    <td>{{ $product->manual }}</td>
                    <td><a href="/orderProduct/{{ $product->id }}">Warenkorb hinzufügen</a></td>
                </tr>
        </table>
        <a href="/products">Zurück</a>
    </body>
</html>