<html>    
    <table>
        <tr>
            <th>Name</th>
            <th>Preis</th>
        </tr>
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td><img src="{{ $product->image }}" alt="{{ $product->name }}"></td>
                <td><a href="/orderProduct/{{ $product->id }}">Warenkorb hinzufügen</a></td>
            </tr>
    </table>
</html>