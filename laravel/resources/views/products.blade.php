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
            <a class="btn-area" href="/order">Cart</a>
            <a class="anzeigecart" href="/profile"><img src="https://www.svgrepo.com/show/43426/profile.svg" alt="Profile" class="profile"></a>
            </div>
        </header>
        <div id="shop" class="shop">
            @foreach ($products as $product)
            <div class="shopItem">
                <a href="/product/{{ $product->id }}"><img src="{{$product->image}}" alt="$product->name" class="itemPicture"></a>
                <div class="normalPrice">{{ $product->name}}</div>
                <div class="specialOffer">{{ $product->price }} CHF</div>
                <a href="/orderProduct/{{ $product->id }}" class="addToCart"><button type="button">Add to Cart</button></a>
            </div>
            @endforeach
        </div>
    </body>
</html>