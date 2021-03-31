<html>
    <head>
        <meta charset="utf-8">
        <title>M151 BBZW Dorfladen v2</title>
        <base href="/">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        </head>
        <body>
            <a class="btn-area" href="/products">zu Produkten zurückkehren</a>
            <a class="anzeigecart" href="/logout">ausloggen</a>
            <h1>Bestellungen</h1>    
            <table>
                <tr>
                    <th>Bestellungsnummer</th>
                    <th>Preis</th>
                    <th>Datum</th>
                </tr>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->price }} CHF</td>
                    <td>{{ $order->created_at }}</td>
                </tr>
                @endforeach
            </table>
        </body>
</html>