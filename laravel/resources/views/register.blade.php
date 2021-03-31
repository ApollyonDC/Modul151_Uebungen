<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="registerUser" method="POST">
    <input type="text" name="firstname" placeholder="Vorname" required>
    <input type="text" name="lastname" placeholder="Nachname" required>
    <input type="text" name="street" placeholder="Strasse" required>
    <input type="text" name="zip" placeholder="Zip" required>
    <input type="text" name="city" placeholder="Stadt" required>
    <input type="number" name="phone" placeholder="Telefonnummer" required>
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" value="submit" name="submit">
    </form>
    <a href="/products">Zurück</a>
</body>
</html>