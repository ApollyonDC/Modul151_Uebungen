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
        <header id="navbar">
        <img href="/products" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fhybridtechcar.com%2Fwp-content%2Fuploads%2F2019%2F04%2Fdownload-17.png&f=1&nofb=1" alt="logo" class="logo">
        <div id="cartnav">
        <a class="btn-area" href="/products">zu Produkten zurückkehren</a>
        <a class="anzeigecart" href="/logout">ausloggen</a>
        </div>
        </header>
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