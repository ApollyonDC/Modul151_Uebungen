<html>
    <head>
        <title>Bestellung</title>
    </head>
    <body>
        <header id="navbar">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fhybridtechcar.com%2Fwp-content%2Fuploads%2F2019%2F04%2Fdownload-17.png&f=1&nofb=1" alt="logo" class="logo">
            <div id="cartnav">
            <a class="btn-area" href="/order">Cart</a>
            <a class="anzeigecart" href="/profile"><img src="https://www.svgrepo.com/show/43426/profile.svg" alt="Profile" class="profile"></a>
            </div>
        </header>
    <form action="finishOrder" method="POST">
        <h2>Zahlungsart:</h2>
        <input type="radio" name="Zahlungsart" id="Rechnung" value="Rechnung">
        <label for="Rechnung">Rechnung</label>
        <h2>Personaldaten:</h2>
        <p>{{$user['first_name']}}</p>
        <p>{{$user['last_name']}}</p>
        <p>{{$user['street']}}</p>
        <p>{{$user['zip']}}</p>
        <p>{{$user['city']}}</p>
        <p>{{$user['phone']}}</p>
    <input type="submit" value="Bestellung abschliessen!" name="submit">
    </form>
    <a href="/orderInfo">andere Lieferadresse</a>
    <a href="/order">Zurück</a>
</html>