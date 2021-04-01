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
    <form action="finishOrder" method="POST">
        <h2>Zahlungsart:</h2>
        <p>Rechnung</p>
        <h2>Personaldaten:</h2>
        <input type="text" name="firstname" placeholder="Vorname" required>
        <input type="text" name="lastname" placeholder="Nachname" required>
        <input type="text" name="street" placeholder="Strasse" required>
        <input type="text" name="zip" placeholder="Zip" required>
        <input type="text" name="city" placeholder="Stadt" required>
        <input type="number" name="phone" placeholder="Telefonnummer" required>
        <input type="email" name="email" placeholder="E-mail" required>
    <input type="submit" class="btn-area" value="Bestellung abschliessen!" name="submit">
    </form>
    <a href="/order" class="btn-area" >Zurück</a>
    <a href="/orderInfo" class="anzeigecart">Meine Adresse verwenden</a>
</html>