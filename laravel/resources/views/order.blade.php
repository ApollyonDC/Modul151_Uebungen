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
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fhybridtechcar.com%2Fwp-content%2Fuploads%2F2019%2F04%2Fdownload-17.png&f=1&nofb=1" alt="logo" class="logo">
            <div id="cartnav">
            <a class="anzeigecart" href="/profile"><img src="https://www.svgrepo.com/show/43426/profile.svg" alt="Profile" class="profile"></a>
            </div>
        </header>
        <table>
        <tr>
            <th>Name</th>
            <th>Preis</th>
            <th></th>
            <th>Amount</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($itemsInCart as $product)
            <tr>
                <td>{{$product['name']}}</td>
                <td>{{$product['price']}} CHF</td>
                <td><a href="/decrementProduct/{{ $product->id }}">-</a></td>
                <td>{{$product['count']}}</td>
                <td><a href="/incrementProduct/{{ $product->id }}">+</a></td>
                <td><img src="{{ $product->image }}" alt="{{ $product->name }}"></td>
                <td><a href="/removeProduct/{{ $product->id }}">remove</a></td>
            </tr>
        @endforeach
    </table>
    <h2>Total: {{$total}} CHF</h2>
    <a href="/products" class="btn-area">Zurück</a>
    <a href="/orderInfo">Weiter</a>
    </body>
</html>