<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="?" method="POST">
    <input type="text" name="firstname" placeholder="Susi">
    <input type="text" name="lastname" placeholder="Mustermann">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="register">
    </form>
</body>
</html>

<?PHP

if(isset($_POST['submit'])){

    $db = DB::get();

    try {
        $db->startTransaction();

        $db->query("INSERT INTO logins(username, password, first_name, last_name) VALUES(:usernamevar, :passwordvar, :firstnamevar, :lastnamevar)",[

            ':usernamevar' => $_POST['username'],
            ':passwordvar' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ':firstnamevar' => $_POST['firstname'],
            ':lastnamevar' => $_POST['lastname']
        ]);
    }
    catch (\Exception $e) {
        $db->rollback();
        throw $e;
    }


}

INCLUDE 'db.php';
?>