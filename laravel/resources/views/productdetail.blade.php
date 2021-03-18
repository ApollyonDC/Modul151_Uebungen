<html>    
    <table>
        <tr>
            <th>Name</th>
            <th>Preis</th>
        </tr>
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->image }}</td>
                <td><button>Warenkorb hinzufügen</button></td>
            </tr>
    </table>
</html>