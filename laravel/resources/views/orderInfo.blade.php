<html>
    <head>
        <title>Bestellung abgeschlossen!</title>
    </head>

    <body>
    <form action="finishOrder" method="POST">
        <h2>Zahlungsart:</h2>
        <input type="radio" name="Zahlungsart" id="Rechnung" value="Rechnung">
        <label for="Rechnung">Rechnung</label>
        <h2>Personaldaten:</h2>
        <input type="text" name="firstname" placeholder="Vorname" required>
        <input type="text" name="lastname" placeholder="Nachname" required>
        <input type="text" name="street" placeholder="Strasse" required>
        <input type="text" name="zip" placeholder="Zip" required>
        <input type="text" name="city" placeholder="Stadt" required>
        <input type="number" name="phone" placeholder="Telefonnummer" required>
        <input type="email" name="email" placeholder="E-mail" required>
    <input type="submit" value="Bestellung abschliessen!" name="submit">
    </form>
    <a href="/order">Zurück</a>
</html>